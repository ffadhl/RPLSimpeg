<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePenjadwalanRequest extends FormRequest
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
            'txtnip' => 'NIP',
            'txtnama' => 'Nama Karyawan',
            'id_jbtn' => 'Jenis Cuti',
            'wkt_shft' => 'Mulai Cuti',
            'tgl_shft' => 'Selesai Cuti',
        ];
    }
}
