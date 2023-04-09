<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penggajian extends Model
{
    use HasFactory;
    protected $table = 'penggajian';
    protected $primaryKey = 'id_gaji';

    public $incrementing = false;
    public $timestamps = true;

    public function karyawans(){
        return $this->belongsTo('App\Models\Karyawan','nip');
    }
}
