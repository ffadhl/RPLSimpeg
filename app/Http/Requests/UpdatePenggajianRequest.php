<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePenggajianRequest extends FormRequest
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
            'gj_pkk' => 'required',
            'tjgn' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
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
            'txtnip' => 'NIP',
            'txtnama' => 'Nama Karyawan',
            'gj_pkk' => 'Gaji Pokok',
            'tjgn' => 'Tunjangan',
        ];
    }
}
