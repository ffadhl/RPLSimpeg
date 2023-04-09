<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Departemen extends Model
{
    use HasFactory;
    protected $table = 'penggajian';
    protected $primaryKey = 'id_gaji';

    public $incrementing = false;
    public $timestamps = true;
}
