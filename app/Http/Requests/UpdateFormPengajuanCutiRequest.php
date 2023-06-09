<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateFormPengajuanCutiRequest extends FormRequest
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
    public function attributes(): array
    {
        return [
            'nama_dprtmn' => 'Nama Departemen',
            'kepala_dprtmn' => 'Kepala Departemen',
            'deskripsi_dprtmn' => 'Deskripsi Departemen',
            'lokasi_dprtmn' => 'Lokasi Departemen',
        ];
    }
}
