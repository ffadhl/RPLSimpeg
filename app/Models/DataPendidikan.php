<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataPendidikan extends Model
{
    use HasFactory;
    protected $table = 'datapendidikan';
    protected $primaryKey = 'nip';

    public $incrementing = false;
    public $timestamps = true;

    public function post(): BelongsTo
    {
        return $this->belongsTo(Karyawan::class);
    }

}
