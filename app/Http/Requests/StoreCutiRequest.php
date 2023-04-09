<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCutiRequest extends FormRequest
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
            'id_ct' => 'required|unique:departemen,id_departemen|min:7|max:18',
            'txtnip' => 'required',
            'txtnama' => 'required',
            'jns_ct' => 'required',
            'ml_ct' => 'required',
            'sls_ct' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'id_ct.required' => ':attribute Tidak Boleh Kosong',
            'body.unique' => ':attribute Sudah ada di dalam tabel',
            'txtnip.required' => ':attribute Tidak Boleh Kosong',
            'txtnama.required' => ':attribute Tidak Boleh Kosong',
            'jns_ct.required' => ':attribute Tidak Boleh Kosong',
            'ml_ct.required' => ':attribute Tidak Boleh Kosong',
            'sls_ct.required' => ':attribute Tidak Boleh Kosong',

        ];
    }
    public function attributes(): array
    {
        return [
            'id_ct' => 'ID Cuti',
            'txtnip' => 'NIP',
            'txtnama' => 'Nama Karyawan',
            'jns_ct' => 'Jenis Cuti',
            'ml_ct' => 'Mulai Cuti',
            'sls_ct' => 'Selesai Cuti',
        ];
    }
}
