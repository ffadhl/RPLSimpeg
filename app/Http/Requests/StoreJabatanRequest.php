<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreJabatanRequest extends FormRequest
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
            'idjabatan' => 'required|unique:jabatan,id_jabatan|min:3|max:18',
            'namajabatan' => 'required',
            'deskripsijabatan' => 'required',
            'lokasijabatan' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'idjabatan.required' => ':attribute Tidak Boleh Kosong',
            'body.unique' => ':attribute Sudah ada di dalam tabel',
            'namajabatan.required' => ':attribute Tidak Boleh Kosong',
            'deskripsijabatan.required' => ':attribute Tidak Boleh Kosong',
            'lokasijabatan.required' => ':attribute Tidak Boleh Kosong',

        ];
    }
    public function attributes(): array
    {
        return [
            'idjabatan' => 'ID Jabatan',
            'namajabatan' => 'Nama Jabatan',
            'deskripsijabatan' => 'Deskripsi Jabatan',
            'lokasijabatan' => 'Lokasi Jabatan',
        ];
    }
}
