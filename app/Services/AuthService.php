<?php

namespace App\Services;

use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthService
{
    public function loginWithEmail(string $email, string $password)
    {
        $user = User::where('email', $email)->first();
        if (!$user || !Hash::check($password, $user->password)) {
            return null;
        }
        return $user;
    }

    public function loginWithTelegram(string $telegram, string $password)
    {
        $user = User::where('telegram', $telegram)->first();
        if (!$user || !Hash::check($password, $user->password)) {
            return null;
        }
        return $user;
    }
}
