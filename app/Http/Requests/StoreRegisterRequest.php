<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class StoreRegisterRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'username' => 'required|max:255',
            'email' => 'required|email|unique:users',
            'password' => [
                'required', 
                'max:255',
                'confirmed', 
                Password::min(5)->letters()->numbers()
            ],
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array<string, string>
     */
    public function messages(): array
    {
        return [
            'email.required' => 'Email Harus tidak boleh kosong',
            'password.required' => 'Password Tidak Boleh kosong',
            'password.confirmed' => 'konfirmasi password tidak sesuai'
        ];
    }
}
