<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Category extends Model
{
    use HasFactory;
    public $table='categories';

    public $fillable=['name'];

    public function sub_category(){
        return $this->hasMany(Category::class,'father')->with('courses');
    }

    public function sub_categoryWithCourse(){
        return $this->hasMany(Category::class,'father')->with('courses');
    }

    public function sub_category_id(){
        return $this->hasMany(Category::class,'father')->select('id');
    }

    public function courses_privet(){
        return $this->hasMany(Course::class,'category_id')->where('user_id',Auth::id());
    }


    public function courses(){
        return $this->hasMany(Course::class,'category_id')
            ->with('user')
            ->with('subscribtion_confirm',function($s){
                $s->select('id');
            })
            ->where('confirmed',1)
            ;
    }
    public function diploma(){
        return $this->hasMany(Diploma::class,'category_id')
            ->with('user')
            ->with('subscribtion_confirm',function($s){
                $s->select('id');
            })
            ->where('confirmed',1)
            ;
    }
}
