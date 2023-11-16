<?php

namespace App\Http\Requests;

use Axiom\Rules\TelephoneNumber;
use Illuminate\Foundation\Http\FormRequest;

class AlamatRequest extends FormRequest
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
            'nama' => 'required|max:255',
            'no_hp' => ['required', new TelephoneNumber],
            'alamat_lengkap' => 'required|max:255',
            'kota' => 'required|max:255',
            'provinsi' => 'required|max:255',
            'kode_pos' => 'required|max:255',
        ];
    }
}
