<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubscribtionDiploma extends Model
{
    use HasFactory;

    protected $fillable=['user_id','diploma_id','confirmed'];

    public function diplomas(){
        return $this->belongsTo(Diploma::class,'course_id');
    }

    public function user(){
        return $this->hasMany(User::class,'user_id');
    }
}
