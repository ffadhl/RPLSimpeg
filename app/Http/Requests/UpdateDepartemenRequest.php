<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDepartemenRequest extends FormRequest
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
            'nama_dprtmn' => 'required',
            'kepala_dprtmn' => 'required',
            'deskripsi_dprtmn' => 'required',
            'lokasi_dprtmn' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'body.unique' => ':attribute Sudah ada di dalam tabel',
            'nama_dprtmn.required' => ':attribute Tidak Boleh Kosong',
            'kepala_dprtmn.required' => ':attribute Tidak Boleh Kosong',
            'deskripsi_dprtmn.required' => ':attribute Tidak Boleh Kosong',
            'lokasi_dprtmn.required' => ':attribute Tidak Boleh Kosong',
        ];
    }
    public function attributes(): array
    {
        return [
            'nama_dprtmn' => 'Nama Departemen',
            'kepala_dprtmn' => 'Kepala Departemen',
            'deskripsi_dprtmn' => 'Deskripsi Departemen',
            'lokasi_dprtmn' => 'Lokasi Departemen',
        ];
    }
}
