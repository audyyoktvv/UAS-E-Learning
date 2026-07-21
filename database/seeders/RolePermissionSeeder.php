<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Teacher; // Pastikan model Teacher di-import
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class RolePermissionSeeder extends Seeder
{
    public function run(): void
    {
        // 1. Membuat Role (Gunakan updateOrCreate agar tidak error jika sudah ada)
        $ownerRole = Role::firstOrCreate(['name' => 'owner']);
        $teacherRole = Role::firstOrCreate(['name' => 'teacher']);
        $studentRole = Role::firstOrCreate(['name' => 'student']);

        // 2. Membuat User Owner
        $userOwner = User::updateOrCreate([
            'email' => 'audy@owner.com'
        ], [
            'name' => 'audy',
            'occupation' => 'Educator',
            'avatar' => 'images/default-avatar.png',
            'password' => bcrypt('11223344')
        ]);
        $userOwner->assignRole($ownerRole);

        // 3. Membuat User Guru (Contoh Guru Baru)
        $userTeacher = User::updateOrCreate([
            'email' => 'guru@teacher.com'], [
            'name' => 'Siska',
            'occupation' => 'Teacher',
            'avatar' => 'images/default-avatar.png',
            'password' => bcrypt('12345678')
        ]);
        $userTeacher->assignRole($teacherRole);

        // Opsional: Jika Anda memiliki tabel 'teachers' untuk detail guru
        Teacher::updateOrCreate([
            'user_id' => $userTeacher->id
        ], [
            'is_active' => true // Sesuaikan dengan kolom di tabel teachers Anda
        ]);
    }
}