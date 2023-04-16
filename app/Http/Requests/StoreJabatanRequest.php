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
            'field_id' => 'required|unique:jabatan,id_jabatan|min:3|max:18',
            'field_nama' => 'required',
            'field_deskripsi' => 'required',
            'field_lokasi' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'field_id.required' => ':attribute Tidak Boleh Kosong',
            'body.unique' => ':attribute Sudah ada di dalam tabel',
            'field_nama.required' => ':attribute Tidak Boleh Kosong',
            'field_deskripsi.required' => ':attribute Tidak Boleh Kosong',
            'field_lokasi.required' => ':attribute Tidak Boleh Kosong',
    

        ];
    }
    public function attributes(): array
    {
        return [
            'field_id' => 'ID Jabatan',
            'field_nama' => 'Nama Jabatan',
            'field_deskripsi' => 'Deskripsi Jabatan',
            'field_lokasi' => 'Lokasi Jabatan',
        ];
    }
}
