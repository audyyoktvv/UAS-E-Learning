<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// 1. IMPORT DI SINI (Supaya aplikasi tahu SoftDeletes itu apa)
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class CourseKeypoint extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id',
        'course_id',
        
    ];
}
