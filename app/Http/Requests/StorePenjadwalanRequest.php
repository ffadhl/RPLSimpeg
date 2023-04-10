<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePenjadwalanRequest extends FormRequest
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
            'kd_jwl' => 'required|unique:departemen,id_departemen|min:7|max:18',
            'txtnip' => 'required',
            'txtnama' => 'required',
            'id_jbtn' => 'required',
            'wkt_shft' => 'required',
            'tgl_shft' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'kd_jwl.required' => ':attribute Tidak Boleh Kosong',
            'body.unique' => ':attribute Sudah ada di dalam tabel',
            'txtnip.required' => ':attribute Tidak Boleh Kosong',
            'txtnama.required' => ':attribute Tidak Boleh Kosong',
            'id_jbtn.required' => ':attribute Tidak Boleh Kosong',
            'wkt_shft.required' => ':attribute Tidak Boleh Kosong',
            'tgl_shft.required' => ':attribute Tidak Boleh Kosong',

        ];
    }
    public function attributes(): array
    {
        return [
            'kd_jwl' => 'Kode Jadwal',
            'txtnip' => 'NIP',
            'txtnama' => 'Nama Karyawan',
            'id_jbtn' => 'ID Jabatan',
            'wkt_shft' => 'Waktu Shift',
            'tgl_shft' => 'Tanggal Shift',
        ];
    }
}
