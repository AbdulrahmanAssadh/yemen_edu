<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Http\Requests\instructor\DiplomaRequest;
use App\Models\Diploma;
use App\Traits\DiplomaUploade;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class DiplomaController extends Controller
{
    use DiplomaUploade;

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
        return view('instructor.create-diploma');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param DiplomaRequest $request
     * @return RedirectResponse
     */
    public function store(DiplomaRequest $request)
    {
        $image = $this->SaveImage($request->file('img'), '');
        $r=Diploma::create([
            'name' => $request->name,
            'description' => $request->description,
            'discount' => $request->discount,
            'img' => $image,
            'user_id' => Auth::id(),
            'category_id' => $request->category
        ]);

        if($r){
            return redirect()->route('instructor');
        }else{
            return redirect()->back();
        }

    }

    /**
     * Display the specified resource.
     *
     * @param Diploma $diploma
     * @return Response
     */
    public function show(Diploma $diploma)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Diploma $diploma
     * @return Response
     */
    public function edit(Diploma $diploma)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Diploma $diploma
     * @return Response
     */
    public function update(Request $request, Diploma $diploma)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Diploma $diploma
     * @return Response
     */
    public function destroy(Diploma $diploma)
    {
        //
    }

    public function getForCourse(){
        $dip=Diploma::query()
            ->select('id','name')
            ->with('subscribtion_confirm',function($s){
                $s->select('id');
            })
            ->where('id',Auth::id())->get();
        return \response()->json($dip);
    }
}
