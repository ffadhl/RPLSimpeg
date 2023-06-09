<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Karyawan extends Model
{
    use HasFactory;
    protected $table = 'karyawan';
    protected $primaryKey = 'nip';

    // protected $fillable = [
    //     'nip',
    //     'email',
    //     'password',
    // ];

    public $incrementing = false;
    public $timestamps = true;

    public function comments(): HasMany
    {
        return $this->hasMany(DataKeluarga::class);
    }

    public function datapendidikan(): HasMany
    {
        return $this->hasMany(DataPendidikan::class);
    }
}
