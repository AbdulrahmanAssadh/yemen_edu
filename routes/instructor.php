<?php

use App\Http\Controllers\Instructor\AnswerController;
use App\Http\Controllers\Instructor\CategoryController;
use App\Http\Controllers\Instructor\CourseController;
use App\Http\Controllers\Instructor\DiplomaController;
use App\Http\Controllers\Instructor\InstractorController;
use App\Http\Controllers\Instructor\QuestionController;
use App\Http\Controllers\Instructor\VideoController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware('auth')->group(function (){
    Route::controller(InstractorController::class)->group(function (){
        Route::get('/instructor','index')->name('instructor');

    });

    Route::controller(CourseController::class)->group(function (){
        Route::get('/instructor/create-course','create')->name('create-course');
        Route::post('/instructor/course/save','store')->name('save-course');
        Route::get('/instructor/course/{id}/{name}/edit','edit')->name('edit-course');
        Route::post('/instructor/course/update','update')->name('update-course');
        Route::get('/instructor/course/user','getUserCourse')->name('getUserCourse');

    });

    Route::controller(DiplomaController::class)->group(function (){
        Route::get('/instructor/create-diploma','create')->name('create-diploma');
        Route::post('/instructor/diploma/save','store')->name('save-diploma');
        Route::get('/instructor/diploma/{id}/{name}/edit','edit')->name('edit-diploma');
        Route::post('/instructor/diploma/update','update')->name('update-diploma');
        Route::get('/instructor/diploma/course/user','getForCourse')->name('getForCourse');
    });


    Route::controller(CategoryController::class)->group(function (){
        Route::get('/instructor/category','getForCourse')->name('getCategoryForCourse');
    });


    Route::controller(VideoController::class)->group(function (){
        Route::get('/instructor/video/{video_id}/show','show')->name('view-video');
        Route::get('/instructor/video/upload','create')->name('upload-video');
        Route::post('/instructor/video/save','store')->name('save-video');
    });



    Route::controller(QuestionController::class)->group(function (){
        Route::post('/instructor/course/question/save','store')->name('question-save');
    });
    Route::controller(AnswerController::class)->group(function (){
        Route::post('/instructor/course/answer/save','store')->name('answer-save');
    });

});


