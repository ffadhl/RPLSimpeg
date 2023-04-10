<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Penjadwalan extends Model
{
    use HasFactory;
    protected $table = 'penjadwalan';
    protected $primaryKey = 'kode_jadwal';

    public $incrementing = false;
    public $timestamps = true;

}
