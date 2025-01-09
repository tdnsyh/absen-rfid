<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailGuru extends Model
{
    use HasFactory;
    protected $table = 'detail_guru';
    protected $fillable = ['guru_id', 'pelajaran_id', 'jenis_kelamin', 'nik', 'no_telf', 'alamat'];

    public function guru()
    {
        return $this->belongsTo(Guru::class);
    }

    public function pelajaran()
    {
        return $this->belongsTo(Pelajaran::class);
    }
}
