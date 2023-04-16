<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDataKeluargaRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'txtnamadatakeluarga' => 'required',
            'txttempatlahir' => 'required',
            'txtjeniskelamin' => 'required',
            'txtagamakeluarga' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'body.unique' => ':attribute Sudah ada di dalam tabel',
            'txtnamadatakeluarga.required' => ':attribute Tidak Boleh Kosong',
            'txttempatlahir.required' => ':attribute Tidak Boleh Kosong',
            'txtjeniskelamin.required' => ':attribute Tidak Boleh Kosong',
            'txtagamakeluarga.required' => ':attribute Tidak Boleh Kosong',

        ];
    }
    public function attributes(): array
    {
        return [
            'txtnamadatakeluarga' => 'Nama Keluarga',
            'txttempatlahir' => 'Tempat Lahir',
            'txtjeniskelamin' => 'Jenis Kelamin',
            'txtagamakeluarga' => 'Agama',
        ];
    }
}
