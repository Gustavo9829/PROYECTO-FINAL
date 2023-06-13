<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AuthRegisterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<sstring, \\Illuminate\Contracs\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name'  => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|string|min:6',
            'confirm_password' => 'same:password',
        ];
    }
}
