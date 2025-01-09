<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelajaran extends Model
{
    use HasFactory;
    protected $table = 'pelajaran';
    protected $fillable = ['nama_pelajaran'];

    public function detailGuru()
    {
        return $this->hasMany(DetailGuru::class);
    }
}
