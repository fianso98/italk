<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    const IS_STUDENT = 1;
    const IS_TEACHER = 2;
    const IS_ADMIN = 3;
}
