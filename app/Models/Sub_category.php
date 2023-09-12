<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Sub_category extends Model
{
    use HasFactory;
    public $table='categories';

    public $fillable=['name','father'];

    public function father(){
        return $this->belongsTo(Category::class,'father');
    }

    public function courses_privet(){
        return $this->hasMany(Course::class,'category_id')->where('user_id',Auth::id());
    }


    public function courses(){
        return $this->hasMany(Course::class,'category_id')->where('confirmed',1)->where('user_id','<>',Auth::id());
    }


}
