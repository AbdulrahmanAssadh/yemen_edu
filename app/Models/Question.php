<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    use HasFactory;

    public $fillable=['question','course_id','user_id'];

    public function answer(){
        return $this->hasMany(Answer::class,'question_id')->with('user');
    }

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }
}
