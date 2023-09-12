<?php

namespace App\Http\Controllers\Instructor;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\Diploma;
use App\Models\Instractor;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class InstractorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View
     */
    public function index()
    {
        $UnconfirmCourse =Course::query()
            ->with('category')
            ->with('diploma')
            ->where('user_id',Auth::id())
            ->where('confirmed',0)
            ->get();

        $ConfirmCourse=Course::query()
            ->with('category')
            ->with('diploma')
            ->where('user_id',Auth::id())
            ->where('confirmed',1)
            ->get();

        $diplomas=Diploma::query()
            ->where('user_id',Auth::id())->get();
        return view('instructor.index',compact('ConfirmCourse','UnconfirmCourse','diplomas'));
//        return  Auth::id();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param Instractor $instractor
     * @return Response
     */
    public function show(Instractor $instractor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Instractor $instractor
     * @return Response
     */
    public function edit(Instractor $instractor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param Instractor $instractor
     * @return Response
     */
    public function update(Request $request, Instractor $instractor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param Instractor $instractor
     * @return Response
     */
    public function destroy(Instractor $instractor)
    {
        //
    }
}
