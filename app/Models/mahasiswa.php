<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    use HasFactory;
<<<<<<< HEAD
    protected $table = 'mahasiswas';
    protected $primaryKey = 'idmhs';
    protected $fillable = [
        'nama','tempat_lahir','tanggal_lahir','jenis_kelamin','prodi', 'agama','nik','no_telepon'
    ];

    public $incrementing = false;
    public $timestamps = true;

    public function comments(): HasMany
    {
        return $this->hasMany(Nilaimk::class);
    }

    public function nilaimk()
    {
        return $this->hasMany(Nilaimk::class);
    }

    public function jeniskelamin()
    {
        return $this->belongsTo(JenisKelamin::class);
    }

    public function agama()
    {
        return $this->belongsTo(Agama::class);
    }

    public function programstudi()
    {
        return $this->belongsTo(ProgramStudi::class);
    }

    public function alamat()
    {
        return $this->hasMany(Alamat::class);
    }

    public function nomortelepon()
    {
        return $this->hasMany(NomorTelepon::class);
    }
}

=======
    protected $table = 'mahasiswa';
    protected $primaryKey = 'IDmahasiswa';
    protected $guarded = [];

    public $incrementing = false;
    public $timestamps = true;
}
>>>>>>> 612afbf99163b8071ea86227677c435ad2bb0b2e
