<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class TeacherController extends Controller
{
    public function index()
    {
        // Contoh: Mengambil semua user yang memiliki role 'teacher'
        $teachers = User::role('teacher')->latest()->get(); 
        
        return view('admin.teachers.index', compact('teachers'));
    }

    public function store(Request $request) {
    $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|string|email|max:255|unique:users',
        'password' => 'required|min:8',
    ]);

    $user = User::create([
        'name' => $request->name,
        'email' => $request->email,
        'password' => bcrypt($request->password),
    ]);
    
    $user->assignRole('teacher');
    
    // Tambahkan juga ke tabel profil teachers jika ada
    \App\Models\Teacher::create(['user_id' => $user->id, 'name' => $user->name]);

    return redirect()->route('admin.teachers.index');
}
public function create()
{
    return view('admin.teachers.create'); // Pastikan file view ini ada!
}
}
