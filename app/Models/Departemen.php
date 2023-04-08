<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    use HasFactory;
    protected $fillable = ['id_departemen','nama_departemen','kepala_departemen','deskripsi_departemen','lokasi_departemen'];
    protected $primaryKey = 'id_departemen';

    public $incrementing = false;
    public $timestamps = true;
}
