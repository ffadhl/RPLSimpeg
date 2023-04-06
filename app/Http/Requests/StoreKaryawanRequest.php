<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreKaryawanRequest extends FormRequest
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
            'txtnip' => 'required|unique:karyawan,nip|min:7|max:18',
            'txtnama' => 'required',
            'txttempatlahir' => 'required',
            'tl' => 'required',
            'txtjenis_kelamin' => 'required',
            'txttelp' => 'required',
            'txtagama' => 'required',
            'txtpend' => 'required',
            'txtlisensi' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'txtnip.required' => ':attribute Tidak Boleh Kosong',
            'body.unique' => ':attribute Sudah ada di dalam tabel',
            'txtnama.required' => ':attribute Tidak Boleh Kosong',
            'txttempatlahir' => ':attribute Tidak Boleh Kosong',
            'tl.required' => ':attribute Tidak Boleh Kosong',
            'txtjenis_kelamin.required' => ':attribute Tidak Boleh Kosong',
            'txttelp.required' => ':attribute Tidak Boleh Kosong',
            'txtagama.required' => ':attribute Tidak Boleh Kosong',
            'txtpend.required' => ':attribute Tidak Boleh Kosong',
            'txtlisensi.required' => ':attribute Tidak Boleh Kosong',

        ];
    }
    public function attributes(): array
    {
        return [
            'txtnip' => 'NIP',
            'txtnama' => 'Nama',
            'txttempatlahir' => 'Tempat Lahir',
            'tl' => 'Tanggal Lahir',
            'txtjenis_kelamin' => 'Jenis Kelamin',
            'txttelp' => 'No Telepon',
            'txtagama' => 'Agama',
            'txtpend' => 'Pendidikan',
            'txtlisensi' => 'Lisensi',
        ];
    }
}
