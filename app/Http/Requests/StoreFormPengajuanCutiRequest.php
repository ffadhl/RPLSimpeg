<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFormPengajuanCutiRequest extends FormRequest
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
            'field_nama' => 'required',
            'field_nip' => 'required|max:255',
            'field_jabatan' => 'required',
            'field_departemen' => 'required',
            'field_email' => 'required',
            'field_nohp' => 'required',
            'field_tanggal_mulai' => 'required',
            'field_tanggal_selesai' => 'required',
            'field_jenis_cuti' => 'required',
            'field_keterangan' => 'required',
        ];
    }
    public function messages(): array
    {
        return [
            'field_nama.required' => ':Nama tidak boleh kosong',
            'field_nip.required' => ':NIP tidak boleh kosong',
            'field_jabatan.required' => ':Jabatan tidak boleh kosong',
            'field_departemen.required' => ':Departemen tidak boleh kosong',
            'field_email.required' => ':Email tidak boleh kosong',
            'field_nohp.required' => ':No HP tidak boleh kosong',
            'field_tanggal_mulai.required' => ':Tanggal Mulai tidak boleh kosong',
            'field_tanggal_selesai.required' => ':Tanggal Selesai tidak boleh kosong',
            'field_jenis_cuti.required' => ':Bagian data tidak boleh kosong',
            'field_keterangan.required' => ':Keterangan tidak boleh kosong',
        ];
    }
    public function attributes(): array
    {
        return [
            'field_nama' => 'Nama',
            'field_nip' => 'NIP',
            'field_jabatan' => 'Jabatan',
            'field_departemen' => 'Departemen',
            'field_email' => 'Email',
            'field_nohp' => 'No HP',
            'field_tanggal_mulai' => ':Tanggal Mulai',
            'field_tanggal_selesai' => ':Tanggal Selesai',
            'field_jenis_cuti' => 'Jenis Cuti',
            'field_keterangan' => 'Keterangan',
        ];
    }
}