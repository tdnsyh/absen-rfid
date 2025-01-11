<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pelajaran;
use Illuminate\Support\Facades\DB;

class PelajaranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        DB::table('pelajaran')->insert([
            [
                'nama_pelajaran' => 'Matematika',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pelajaran' => 'Bahasa Indonesia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pelajaran' => 'Fisika',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pelajaran' => 'Kimia',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_pelajaran' => 'Biologi',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Tambahkan pelajaran lain sesuai kebutuhan
        ]);
    }
}
