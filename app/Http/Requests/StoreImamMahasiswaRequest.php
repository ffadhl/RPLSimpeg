<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreImamMahasiswaRequest extends FormRequest
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
            'txtidmahasiswa' => 'required|unique:mahasiswa,idmahasiswa|min:10|max:10',
            'txtnama' => 'required',
            'txtjeniskelamin' => 'required',
            'txtprodi' => 'required',
            'txtagama' => 'required',
            'txtnik' => 'required',
            'txttelepon' => 'required',
            'txtalamat' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'txtidmahasiswa.required' => ':attribute Tidak Boleh Kosong',
            'body.unique' => ':attribute Sudah ada di dalam tabel',
            'txtnama.required' => ':attribute Tidak Boleh Kosong',
            'txtjeniskelamin.required' => ':attribute Tidak Boleh Kosong',
            'txtprodi.required' => ':attribute Tidak Boleh Kosong',
            'txtagama.required' => ':attribute Tidak Boleh Kosong',
            'txtnik.required' => ':attribute Tidak Boleh Kosong',
            'txttelepon.required' => ':attribute Tidak Boleh Kosong',
            'txtalamat.required' => ':attribute Tidak Boleh Kosong',
        ];
    }
    public function attributes(): array
    {
        return [
            'txtidmahasiswa' => 'IDMahasiswa',
            'txtnama' => 'Nama',
            'txtjeniskelamin' => 'Jenis Kelamin',
            'txtprodi' => 'Prodi',
            'txtagama' => 'Agama',
            'txtnik' => 'NIK',
            'txttelepon' => 'Telepon',
            'txtalamat' => 'Alamat',
        ];
    }
}
