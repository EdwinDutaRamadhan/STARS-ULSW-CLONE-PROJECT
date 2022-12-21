<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Beasiswa;
class BeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Beasiswa::create([
            'user_id' => 2,
            'link' => 'link',
            'beasiswa' => 'Beasiswa Prestasi Akademik Semester 1 Tahun 2022',
            'status' => 1,
            'aktif' =>"Senin, 26 September 2022 S/D Jum'at, 16 Desember 2022"
        ]);
        Beasiswa::create([
            'user_id' => 2,
            'link' => 'link',
            'beasiswa' => 'Beasiswa Prestasi Akademik Semester 2 Tahun 2022',
            'status' => 1,
            'aktif' =>"Selasa, 1 Februari 2022 S/D Jum'at, 29 April 2022"
        ]);
    }
}
