<?php

use App\Http\Controllers\Instructor\CourseController;
use App\Http\Controllers\Instructor\DiplomaController;
use App\Http\Controllers\student\HomeController;
use App\Http\Controllers\student\MyLearnController;
use App\Http\Controllers\student\SearchController;
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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', function () {
        return view('index');
    })->name('dashboard');
});


Route::get('/',[HomeController::class,'index']);



Route::get('/course/{id}/{name}',[CourseController::class,'details'])->name('details-course');
Route::get('/diploma/{id}/{name}',[DiplomaController::class,'details'])->name('details-diploma');

Route::controller(MyLearnController::class)->group(function (){
    Route::get('/myLearn','show')->middleware('auth')->name('myLearn');
});


Route::controller(SearchController::class)->group(function (){
    Route::get('/course/','show')->name('search');
});
