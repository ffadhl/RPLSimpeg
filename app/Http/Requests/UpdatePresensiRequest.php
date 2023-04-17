<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdatePresensiRequest extends FormRequest
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
            'sts_prsns' => 'required',
            'img_foto' => 'required|image|mimes:jpeg,jpg,png|max:9000',
        ];
    }
    public function messages(): array
    {
        return [
            'body.unique' => ':attribute Sudah ada di dalam tabel',
            'txtnip.required' => ':attribute Tidak Boleh Kosong',
            'txtnama.required' => ':attribute Tidak Boleh Kosong',
            'sts_prsns.required' => ':attribute Tidak Boleh Kosong',
            'img_foto.required' => ':attribute Tidak Boleh Kosong',
        ];
    }
    public function attributes(): array
    {
        return [
            'txtnip' => 'NIP',
            'txtnama' => 'Nama Karyawan',
            'sts_prsns' => 'Status Presensi',
            'img_foto' => 'Foto',
        ];
    }
}
