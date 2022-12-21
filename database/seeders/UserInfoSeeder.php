<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\UserInfo as Info;
class UserInfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Info::create([
            'user_id' => 1,
            'name' => 'Edwin Duta Ramadhan',
            'email' => '672020272@student.uksw.edu',
            'telp' => '',
            'bank' =>'',
            'norek' => '',
            'pemilik' => '',
            'progdi'=>'Teknik Informatika'
        ]);
        Info::create([
            'user_id' => 2,
            'name' => 'Mahasiswa Baru',
            'email' => '682020272@student.uksw.edu',
            'telp' => '',
            'bank' =>'',
            'norek' => '',
            'pemilik' => '',
            'progdi'=>'Sistem Informasi'
        ]);
    }
}
