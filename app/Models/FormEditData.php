<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormEditData extends Model
{
    use HasFactory;
    protected $table = 'form_pengajuan_editdata';
    protected $fillable = [
        'nama',
        'nip',
        'jabatan',
        'departemen',
        'email',
        'no_hp',
        'bagian_data',
        'keterangan',
    ];

    
}
