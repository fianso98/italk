<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    public function courses(){
        return $this->belongsToMany(Course::class)->withPivot('price');
    }

    public function cvs(){
        return $this->hasOne(Cv::class);
    }
    
    public function planing(){
        return $this->belongsToMany(Planing::class);
    }
}
