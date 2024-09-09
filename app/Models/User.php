<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'driver_license',   // Added field
        'license_number',   // Added field
        'contact_number',   // New field
        'address',
        'plate_number',        // New field
        'driver_image',
        'license_expiration',
        'verification_code', 'is_verified',
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
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    /**
     * Check if the user has a specific role.
     *
     * @param  string  $role
     * @return bool
     */
    public function hasRole($role)
    {
        return $this->role === $role;
    }

    /**
     * Check if the user is an admin.
     *
     * @return bool
     */
    public function isAdmin()
    {
        return $this->hasRole('admin');
    }
    public function bookingsUpdated()
    {
        return $this->hasMany(Booking::class, 'updated_by');
    }
// Add this method to check if the user is a coordinator
public function isCoordinator()
{
    return $this->hasRole('coordinator');
}

    /**
     * Check if the user is a courier.
     *
     * @return bool
     */
    public function isCourier()
    {
        return $this->hasRole('courier');
    }

    /**
     * Check if the user is accounting.
     *
     * @return bool
     */
    public function isAccounting()
    {
        return $this->hasRole('accounting');
    }

    /**
     * Get the bookings for the user (if they are a courier).
     */
    public function bookings()
    {
        return $this->hasMany(Booking::class, 'driver_id');
    }
    public function createdBookings()
    {
        return $this->hasMany(Booking::class, 'created_by');
    }
    public function courier()
    {
        return $this->belongsTo(User::class, 'driver_id');
    }

}
