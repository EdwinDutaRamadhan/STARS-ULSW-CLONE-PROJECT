<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\KKMCategory;
class KKMCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        KKMCategory::create([
            'k_k_m_category' => 'OMB'
        ]);
        KKMCategory::create([
            'k_k_m_category' => 'Keterampilan Professional'
        ]);
        KKMCategory::create([
            'k_k_m_category' => 'Keterampilan Bersifat Kemanusiaan'
        ]);
        KKMCategory::create([
            'k_k_m_category' => 'Keterampilan Penunjang'
        ]);
    }
}
