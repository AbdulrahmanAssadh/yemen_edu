<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Course extends Model
{
    use HasFactory;

    public $fillable = ['name', 'description','price', 'img', 'keyword','user_id','category_id'];

    public function video(): HasMany
    {
        return $this->hasMany(Video::class, 'course_id');
    }

    public function file(): HasMany
    {
        return $this->hasMany(File::class, 'course_id');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }
//    public function courses(){
//        return $this->belongsToMany(Course::class,Diploma_Course::class,'diploma_id','course_id');
//    }

    public function diploma(){
        return $this->belongsToMany(Diploma::class,Diploma_Course::class,'diploma_id','course_id');
    }

    public function category(){
        return $this->belongsTo(Category::class,'category_id');
    }

    public function subscribtion_confirm(){
        return $this->hasMany(SubscribtionCourse::class,'course_id')
            ->where('confirmed',1);
    }

    public function subscribtion(){
        return $this->hasMany(SubscribtionCourse::class,'course_id');//->count('course_id');
    }
}
