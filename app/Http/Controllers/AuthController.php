<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Services\AuthService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    use ApiResponse;
    protected $authService;

    public function __construct(AuthService $authService)
    {
        $this->authService = $authService;
    }

    public function login(LoginRequest $request)
    {
        $user = $this->authService->loginWithEmail($request->email, $request->password);

        if (!$user) {
            return $this->error('Invalid credentials', 401);
        }

        $token = $user->createToken('api_access_token');
        return $this->success($user, 'You are logged in successfully!', 200, [
            'token' => $token->plainTextToken,
        ]);
    }

    public function logout(Request $request)
    {
        if ($request->user()) {
            $request->user()->tokens()->delete();
        }

        return $this->success(null, 'Logout successful!');
    }
}
