<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormPengajuanCuti extends Model
{
    use HasFactory;
    protected $table = 'form_pengajuan_cuti';
    protected $primary = 'ID_form';
}
