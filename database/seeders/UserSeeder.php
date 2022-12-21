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
            'nim' => '672020272',
            'password' => '$2y$10$nX.iVs7Ua0p0N3e34hQLxuwuMmVNhoeWKTGSZBeWl/exuXl9LyQVO',
            'role' => 'Admin-Master'
        ]);
        User::create([
            'name' => 'mahasiswa',
            'nim' => '682020272',
            'progdi' => 'Teknik Informatika',
            'password' => '$2y$10$nX.iVs7Ua0p0N3e34hQLxuwuMmVNhoeWKTGSZBeWl/exuXl9LyQVO',
            'role' => 'Mahasiswa'
        ]);
    }
}
