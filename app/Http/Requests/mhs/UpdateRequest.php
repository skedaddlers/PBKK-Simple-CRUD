<?php

namespace App\Http\Requests\mhs;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            //
            'nrp' => 'required|numeric|digits:10',
            'nama' => 'required|string',
            'email' => 'required|email',
            'alamat' => 'required|string',
        ];
    }

    public function messages(): array
    {
        return [
            'nrp.required' => 'NRP tidak boleh kosong!',
            'nrp.numeric' => 'NRP harus berupa angka!',
            'nrp.digits' => 'NRP harus 10 digit!',
            'nama.required' => 'Nama tidak boleh kosong!',
            'email.required' => 'Email tidak boleh kosong!',
            'email.email' => 'Email harus valid!',
            'alamat.required' => 'Alamat tidak boleh kosong!',
        ];
    }
}
