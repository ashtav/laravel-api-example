<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Concerns\HasUuids;

class UserDetail extends Model
{
    use HasFactory;
    use HasUuids;

    protected $fillable = [
        'user_id',
        'name',
        'birthdate',
        'gender',
        'address',
        'phone',
        'photo',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function getPhotoAttribute($value)
    {
        $baseUrl = config('app.url');

        if ($value) {
            return $baseUrl . '/storage/avatars/' . $value;
        }

        return null;
    }
}
