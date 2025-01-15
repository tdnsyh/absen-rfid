<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Guru extends Model
{
    use HasFactory;

    protected $table = 'guru';
    protected $fillable = ['nama', 'nip', 'tag_uid'];

    public function detailGuru()
    {
        return $this->hasOne(DetailGuru::class);
    }

    public function pengajuan()
    {
        return $this->hasMany(Pengajuan::class);
    }
}
