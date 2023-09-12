<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diploma_Course extends Model
{
    use HasFactory;

    public $fillable = ['diploma_id', 'course_id'];

    public function diploma()
    {

    }
}
