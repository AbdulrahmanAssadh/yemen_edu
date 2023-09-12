<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Http\Requests\instructor\CourseRequest;
use App\Models\Category;
use App\Models\Course;
use App\Models\Diploma;
use App\Traits\CourseUploade;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use function auth;

class CourseController extends Controller
{

    use CourseUploade;

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Application|Factory|View
     */
    public function create()
    {
        return view('instructor.create-course');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param CourseRequest $request
     * @return RedirectResponse
     */
    public function store(CourseRequest $request)
    {
        $image = $this->SaveImage($request->file('img'), '');
        $r = Course::create([
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'img' => $image,
            'keyword' => $request->keyword,
            'user_id' => Auth::id(),
            'category_id' => $request->category
        ]);
        if ($request->diploma !== '-1') {
            $diploma = Diploma::query()->findOrFail($request->diploma);
            $diploma->courses()->syncWithoutDetaching($r->id);
        }

        if ($r) {
            return redirect()->route('instructor');
        } else {
            return redirect()->back();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param Course $course
     * @return Response
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param $id
     * @param $name
     * @return Application|Factory|View
     */
    public function edit($id, $name)
    {
        $course = Course::query()->with('diploma')->findOrFail($id);
        $categories = Category::get();
        $diplomas = Diploma::query()->select('id', 'name')
            ->where('user_id', Auth::id())->get();
        return \view('instructor.edit-course', compact('course', 'categories', 'diplomas'));
//        return $course;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Course $course
     * @return RedirectResponse
     */
    public function update(Request $request)
    {
        $course = Course::query()->findOrFail($request->course_id);


        if ($request->img != null) {
            $image = $this->SaveImage($request->file('img'), '');
            $r = $course->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'img' => $image,
                'category_id' => $request->category
            ]);

        } else {

            $r = $course->update([
                'name' => $request->name,
                'description' => $request->description,
                'price' => $request->price,
                'category_id' => $request->category
            ]);
        }

        if ($request->diploma !== '-1') {
            $diploma = Diploma::query()->findOrFail($request->diploma);
            $diploma->courses()->syncWithoutDetaching($r->id);
        }

        if ($r) {
            return redirect()->route('instructor');
        } else
            return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Course $course
     * @return Response
     */
    public function destroy(Course $course)
    {
        //
    }

    public function getUserCourse()
    {
        $cours = Course::query()->where('user_id', Auth::id())->get();
        return \response()->json($cours);
    }

    public function details($id, $name)
    {
        $course = Course::query()
            ->with('user')
            ->with('subscribtion_confirm', function ($s) {
                $s->select('id');
            })
            ->with('category')->findOrFail($id);
        return \view('student.pyment-courses', compact('course'));
    }
}
