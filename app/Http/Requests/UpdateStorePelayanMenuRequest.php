<?php

namespace App\Http\Requests;
use Illuminate\Foundation\Http\FormRequest;

class UpdateStorePelayanMenuRequest extends FormRequest
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
            'nama' => 'required|max:255|min:3',
            'harga' => 'required|numeric|min:2',
            'deskripsi' => 'required|min:10|max:255',
            'stok' => 'required|max:255',
            'gambar' => 'nullable',
            'status' => 'required',
            'tipe_id' => 'required|exists:tipes,id',
        ];
    }
}
