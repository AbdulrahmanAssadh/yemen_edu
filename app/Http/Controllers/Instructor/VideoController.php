<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Question;
use App\Models\Video;
use App\Traits\CourseUploade;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class VideoController extends Controller
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
        return view('instructor.upload-video');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {

        $img = $this->SaveImage($request->img, '');
        $video = $this->saveVideo($request->video, $request->name . '.mp4');

        $r = Video::create([
            'name' => $request->name,
            'video' => $video,
            'img' => $img,
            'course_id' => $request->course
        ]);
//        return 'sdfasdgasg';
    }

    /**
     * Display the specified resource.
     *
     * @param Video $video
     * @return Application|Factory|View
     */
    public function show($course_id)
    {

        $course=Course::query()->with('user')->findOrFail($course_id);
        $instructor=$course->user;
        $videos=Video::query()->where('course_id',$course->id)->get();

        $questions=Question::query()->with('user')->with('answer')->where('course_id',$course->id)->get();

        return \view('instructor.showVideo',compact('videos','instructor','questions','course'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Video $video
     * @return Response
     */
    public function edit(Video $video)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Video $video
     * @return Response
     */
    public function update(Request $request, Video $video)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Video $video
     * @return Response
     */
    public function destroy(Video $video)
    {
        //
    }
}
