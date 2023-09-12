<?php

namespace App\Http\Controllers\student;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    //


    public function show(Request $stmt){

        $courses=Course::query()
            ->with('user')
            ->with('subscribtion_confirm',function($s){
                $s->select('id');
            })
            ->where('name','like',"%$stmt->search%")
        ->orWhere('keyword','like',"%$stmt->search->%")->get();
        $diplomas=Course::query()
            ->with('user')
            ->where('name','like',"%$stmt->search%")
            ->orWhere('keyword','like',"%$stmt->search->%")->get();

        return view('student.search',compact('courses','diplomas'));
    }
}
