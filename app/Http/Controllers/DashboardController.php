<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\CourseStudent;
use App\Models\Teacher;
use App\Models\SubscribeTransaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
{
    $user = Auth::user();
    $coursesQuery = Course::query();

    // Inisialisasi variabel untuk menghindari "Undefined variable" error di Blade
    $transactions = 0;
    $teachers = 0;
    $categories = Category::count();

    if ($user->hasRole('teacher')) {
        // Filter kursus milik guru
        $coursesQuery->whereHas('teacher', function ($query) use ($user) {
            $query->where('user_id', $user->id);
        });

        // Hitung murid unik khusus kelas milik guru
        $students = CourseStudent::whereIn('course_id', $coursesQuery->select('id'))
            ->distinct('user_id')
            ->count('user_id');
            
        // Catatan: $transactions dan $teachers dibiarkan 0 untuk guru
    } else {
        // Jika owner, ambil semua data
        $students = CourseStudent::distinct('user_id')->count('user_id');
        $transactions = SubscribeTransaction::count();
        $teachers = Teacher::count();
    }

    $courses = $coursesQuery->count();

    return view('dashboard', compact('categories', 'courses', 'transactions', 'students', 'teachers'));
}
}