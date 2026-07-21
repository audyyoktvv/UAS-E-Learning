<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Spatie\Permission\Traits\HasRoles;
use Carbon\Carbon;

class User extends Authenticatable
{
    // PERBAIKAN 1: Tambahkan HasRoles di sini agar fungsi assignRole() aktif
    use HasFactory, Notifiable, HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'occupation',
        'avatar',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }

    public function course(){
        // PERBAIKAN 2: Ubah 'course students' menjadi 'course_students' (pakai underscore)
        return $this->belongsToMany(Course::class, 'course_students');
    }

    public function subscribe_transaction(){
        return $this->hasMany(SubscribeTransaction::class);
    }

    public function hasActiveSubscription(){
        $latestSubscription = $this->subscribe_transaction() // Disesuaikan dengan nama fungsi relasi di atas
        ->where('is_paid', true)
        ->latest('updated_at')
        ->first();

        if(!$latestSubscription){
            return false;
        }

        $subscriptionEndDate = Carbon::parse($latestSubscription->subscription_start_date)->addMonths(1);
        return Carbon::now()->lessThanOrEqualTo($subscriptionEndDate); // true==dia berlangganan
    }
}