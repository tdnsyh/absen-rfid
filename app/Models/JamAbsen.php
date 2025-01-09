<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JamAbsen extends Model
{
    protected $table = 'jam_absen';
    use HasFactory;

    protected $fillable = ['nama', 'jam_mulai', 'jam_selesai'];
}
