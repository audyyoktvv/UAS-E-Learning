<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()
{
    $user = Auth::user();
    $coursesQuery = Course::query();

    // Logika filter: Guru hanya lihat miliknya, Owner lihat semua
    if($user->hasRole('teacher')){
        $coursesQuery->whereHas('teacher', function ($query) use($user){
            $query->where('user_id', $user->id);
        });
    }

    // Tambahkan ->latest() agar urutan tampil rapi
    $courses = $coursesQuery->latest()->get(); 

    return view('admin.courses.index', compact('courses'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $validated = $request->validate([
        'name' => 'required|string',
        // validasi lainnya...
    ]);

    // Mengambil profil teacher berdasarkan user yang sedang login
    $teacher = \App\Models\Teacher::where('user_id', Auth::id())->first();

    $validated['teacher_id'] = $teacher->id;
    
    Course::create($validated);

    return redirect()->route('admin.courses.index');
}


    public function teacher()
    {
        // Sesuaikan 'teacher_id' jika nama kolom di tabel Anda berbeda
        return $this->belongsTo(Teacher::class, 'teacher_id');
    }

    /**
     * Display the specified resource.
     */
    public function show(Course $course)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Course $course)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Course $course)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
