<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class DataKeluarga extends Model
{
    use HasFactory;
    protected $table = 'datakeluarga';
    protected $primaryKey = 'nik';

    public $incrementing = false;
    public $timestamps = true;

    public function post(): BelongsTo
    {
        return $this->belongsTo(Karyawan::class);
    }

}
