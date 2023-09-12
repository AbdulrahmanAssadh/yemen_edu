<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\SubscribtionCourse;
use App\Models\SubscribtionDiploma;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MyLearnController extends Controller
{
    //

    public function show(){
        $sub_courses=SubscribtionCourse::query()
            ->with('courses')
            ->where('user_id',Auth::id())
            ->where('confirmed',1)->get();
        $sub_diplomas=SubscribtionDiploma::query()
            ->with('diplomas')
            ->where('user_id',Auth::id())
            ->where('confirmed',1)->get();

//return $sub_courses;
        return view('student.myLearn',compact('sub_courses','sub_diplomas'));
    }
}
