<?php

namespace App\Http\Requests;

use Illuminate\Contracts\Validation\Validator;
use Illuminate\Foundation\Http\FormRequest;

class UpdateUserRequest extends FormRequest
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
            'gambar' => 'image|nullable',
            'email' => 'required|email|max:255',
            'password' => 'required|min:3|max:255',
            'nama_lengkap' => 'required|min:3|max:255',
            'alamat' => 'required|max:255',
            'no_hp' => 'required|alpha_num|min:11',
        ];
    }
}
