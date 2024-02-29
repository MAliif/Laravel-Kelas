<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MuridCreateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'nis' => 'unique:alifs|max:9',
            'name' => 'max:30'
        ];
    }

    // Untuk mengubah nama doang ketika muncul peringatan (flashmessage)
    public function attributes()
    {
        return [
            'name' => 'Name',
            'gender' => 'Gender',
            'nis' => 'NIS',
            'class_id' => 'Class',
        ];
    }

    // Terjadi Ketika....
    public function messages()
    {
        return [
            // 'nis.required' => 'NIS Harus diisi!'
            'nis.max' => 'NIS Maksimal :max karakter',
        ];
    }
}
