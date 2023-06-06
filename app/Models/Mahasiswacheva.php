<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswacheva extends Model
{
    use HasFactory;
    protected $fillable = ['nama', 'nik', 'jenis_kelamin', 'prodi', 'agama', 'telepon', 'alamat'];
}
