<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function authorize()
    {
        return true; // Allow all users to use this
    }

    public function rules()
    {
        return [
            'email' => 'required_without:telegram|email',
            'password' => 'required_without:telegram|string',
            'telegram' => 'nullable|string',
        ];
    }
}
