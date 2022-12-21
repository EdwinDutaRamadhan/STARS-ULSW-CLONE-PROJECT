<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KKM;
class KKMSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KKM::create([
            'user_id' => 2,
            'link' => 'https://drive.google.com/file/d/19JSZKMpkd0VkHH2v8a1s6xdNda_1F6K7/view?usp=sharing',
            'catatan' => '',
            'valid' => 1,
            'poin' => 150,
            'kegiatan' => 'Orientasi Mahasiswa Baru Tahun 2021',
            'rumpun' => '',
            'jenis' => '',
            'kelompok' => 'OMB',
        ]);
    }
}
