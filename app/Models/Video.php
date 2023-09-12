<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    public $fillable=['name','video','img','course_id'];

    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }
}
