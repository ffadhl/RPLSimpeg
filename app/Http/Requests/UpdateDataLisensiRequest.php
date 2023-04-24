<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateDataLisensiRequest extends FormRequest
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
            'txtnamalisensi' => 'required',
            'txtpenerbit' => 'required',
            'txttglterbit' => 'required',
            'txttglkadaluarsa' => 'required',
            'txtidkredensial' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'body.unique' => ':attribute Sudah ada di dalam tabel',
            'txtnamalisensi.required' => ':attribute Tidak Boleh Kosong',
            'txtpenerbit.required' => ':attribute Tidak Boleh Kosong',
            'txttglterbit.required' => ':attribute Tidak Boleh Kosong',
            'txttglkadaluarsa.required' => ':attribute Tidak Boleh Kosong',
            'txtidkredensial.required' => ':attribute Tidak Boleh Kosong',
        ];
    }
    public function attributes(): array
    {
        return [
            'txtnamalisensi' => 'Nama Lisensi',
            'txtpenerbit' => 'Penerbit',
            'txttglterbit' => 'Tanggal Terbit',
            'txttglkadaluarsa' => 'Tanggal Kadaluarsa',
            'txtidkredensial' => 'ID Kredensial',
        ];
    }
}
