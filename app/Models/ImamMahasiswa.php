<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImamMahasiswa extends Model
{
    use HasFactory;
    protected $table = 'imammahasiswa';
    protected $primaryKey = 'idmahasiswa';

    public $incrementing = false;
    public $timestamps = true;
}
