<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailAbsensi extends Model
{

    use HasFactory;
    protected $table = 'detail_absensi';
    protected $fillable = ['absensi_id', 'jam_absen', 'keterangan'];

    public function absensi()
    {
        return $this->belongsTo(Absensi::class);
    }
}
