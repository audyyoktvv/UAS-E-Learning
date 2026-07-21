<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\SoftDeletes;

class Course extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'name',
        'slug',
        'about',
        'path_trailer',
        'thumbnail',
        'teacher_id',
        'category_id',
    ];

    // TAMBAHKAN FUNGSI INI AGAR RELASINYA TERBACA
    public function teacher()
    {
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    // Tambahkan juga relasi ke Category jika diperlukan
    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}