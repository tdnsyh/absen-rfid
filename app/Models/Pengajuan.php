<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pengajuan extends Model
{
    use HasFactory;
    protected $table = 'pengajuan';

    protected $fillable = [
        'guru_id',
        'jenis_pengajuan',
        'keterangan',
        'dokumen_pendukung',
        'status',
    ];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }
}
