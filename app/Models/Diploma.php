<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Diploma extends Model
{
    use HasFactory;

    public $fillable=['name','description','discount','img','user_id','category_id'];

    public function user(){
        return $this->belongsTo(User::class,'user_id');
    }

    public function courses(){
        return $this->belongsToMany(Course::class,Diploma_Course::class,'diploma_id','course_id');
    }

    public function subscribtion_confirm(){
        return $this->hasMany(SubscribtionDiploma::class,'diploma_id')
            ->where('confirmed',1);
    }





}
