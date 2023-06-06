<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class nilaimk extends Model
{
    use HasFactory;
    protected $table = 'nilaimk';
    protected $primaryKey = 'idmhs';
    protected $fillable = ['nama_mk', 'kode_mk', 'nilai'];

    public $incrementing = false;
    public $timestamps = true;

    public function mahasiswa(): BelongsTo
    {
        return $this->belongsTo(mahasiswa::class);
    }

}
