<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreDataPendidikanRequest extends FormRequest
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
            'txtnip' => 'required|min:7|max:18',
            'txtsekolah' => 'required',
            'txtgelar' => 'required',
            'txtbidang' => 'required',
            'txttglmulai' => 'required',
            'txttglselesai' => 'required',
            'txtnilai' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'txtnip.required' => ':attribute Tidak Boleh Kosong',
            'body.unique' => ':attribute Sudah ada di dalam tabel',
            'txtsekolah.required' => ':attribute Tidak Boleh Kosong',
            'txtgelar.required' => ':attribute Tidak Boleh Kosong',
            'txtbidang.required' => ':attribute Tidak Boleh Kosong',
            'txttglmulai.required' => ':attribute Tidak Boleh Kosong',
            'txttglselesai.required' => ':attribute Tidak Boleh Kosong',
            'txtnilai.required' => ':attribute Tidak Boleh Kosong',
        ];
    }
    public function attributes(): array
    {
        return [
            'txtid' => 'ID',
            'txtnip' => 'NIP',
            'txtsekolah' => 'Sekolah',
            'txtgelar' => 'Gelar',
            'txtbidang' => 'Bidang',
            'txttglmulai' => 'Tanggal Mulai',
            'txttglselesai' => 'tanggal Selesai',
            'txtnilai' => 'Nilai',
        ];
    }
}
