<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Absensi extends Model
{
    use HasFactory;
    protected $table = 'absensi';
    protected $fillable = ['guru_id', 'data_absen_id', 'tanggal'];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function detailAbsensi()
    {
        return $this->hasMany(DetailAbsensi::class);
    }
}
