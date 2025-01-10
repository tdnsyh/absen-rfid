<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artikel extends Model
{
    use HasFactory;
    protected $table = 'artikel';

    protected $fillable = [
        'judul',
        'isi_berita',
        'penulis',
        'kategori',
        'gambar',
    ];
}
