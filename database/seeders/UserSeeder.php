<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'edwin',
            'email' => 'edwin@gmail.com',
            'password' => 'edwin',
            'role' => 'Admin-Master'
        ]);
        User::create([
            'name' => 'mahasiswa',
            'email' => 'mahasiswa@gmail.com',
            'progdi' => 'Teknik Informatika',
            'password' => 'mahasiswa',
            'role' => 'Mahasiswa'
        ]);
    }
}
