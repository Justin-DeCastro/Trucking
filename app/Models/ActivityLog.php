<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'activity', 'logged_in_at'];

    protected $casts = [
        'logged_in_at' => 'datetime', // Ensure the timestamp is cast to a Carbon instance
    ];

    public static function log($userId, $activity)
    {
        self::create([
            'user_id' => $userId,
            'activity' => $activity,
            'logged_in_at' => now(), // Set the timestamp here
        ]);
    }
}
