<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePenggajianRequest extends FormRequest
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
            'id_gj' => 'required|unique:departemen,id_departemen|min:7|max:18',
            'txtnip' => 'required',
            'txtnama' => 'required',
            'gj_pkk' => 'required',
            'tjgn' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'id_gj.required' => ':attribute Tidak Boleh Kosong',
            'body.unique' => ':attribute Sudah ada di dalam tabel',
            'txtnip.required' => ':attribute Tidak Boleh Kosong',
            'txtnama.required' => ':attribute Tidak Boleh Kosong',
            'gj_pkk.required' => ':attribute Tidak Boleh Kosong',
            'tjgn.required' => ':attribute Tidak Boleh Kosong',

        ];
    }
    public function attributes(): array
    {
        return [
            'id_gj' => 'ID Gaji',
            'txtnip' => 'NIP',
            'txtnama' => 'Nama Karyawan',
            'gj_pkk' => 'Gaji Pokok',
            'tjgn' => 'Tunjangan',
        ];
    }
}
