<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Presensi extends Model
{
    use HasFactory;
    protected $table = 'presensi';

    protected $fillable = [
        'guru_id',
        'jam_absen_id',
        'tanggal',
        'jam_presensi',
        'keterangan',
    ];

    protected $casts = [
        'tanggal' => 'date',
        'jam_presensi' => 'datetime:H:i',
    ];

    public function detailGuru()
    {
        return $this->hasMany(DetailGuru::class);
    }

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function jamAbsen()
    {
        return $this->belongsTo(JamAbsen::class, 'jam_absen_id');
    }
}
