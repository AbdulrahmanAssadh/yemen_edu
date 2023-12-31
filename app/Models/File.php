<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;

    public $fillable=['name','path'];

    public function course(){
        return $this->belongsTo(Course::class,'course_id');
    }
}
