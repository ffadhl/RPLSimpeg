<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateKaryawanRequest extends FormRequest
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
            'txtnama' => 'required',
            'txttempatlahir' => 'required',
            'tl' => 'required',
            'txtjenis_kelamin' => 'required',
            'txttelp' => 'required',
            'txtagama' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'body.unique' => ':attribute Sudah ada di dalam tabel',
            'txtnama.required' => ':attribute Tidak Boleh Kosong',
            'txttempatlahir.required' => ':attribute Tidak Boleh Kosong',
            'tl.required' => ':attribute Tidak Boleh Kosong',
            'txtjenis_kelamin.required' => ':attribute Tidak Boleh Kosong',
            'txttelp.required' => ':attribute Tidak Boleh Kosong',
            'txtagama.required' => ':attribute Tidak Boleh Kosong',
        ];
    }
    public function attributes(): array
    {
        return [
            'txtnama' => 'Nama',
            'txttempatlahir' => 'Tempat Lahir',
            'tl' => 'Tanggal Lahir',
            'txtjenis_kelamin' => 'Jenis Kelamin',
            'txttelp' => 'No Telepon',
            'txtagama' => 'Agama',
        ];
    }
}
