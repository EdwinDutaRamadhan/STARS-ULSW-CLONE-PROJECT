<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Pengumuman;
class PengumumanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $tb_mahasiswa = array(
            array('id' => '1','user_id' => '1','category_id' => '2', 'title' => 'DISPENSASI UANG KULIAH SEMESTER GENAP 2022/2023','subtitle'=> 'Dispensasi Uang Kuliah Semester Genap 2022/2023', 'category' => 'Dispensasi', 'type' => 'Dispensasi Uang Kuliah 3', 'description' => 'DISPENSASI UANG KULIAH SEMESTER GENAP', 'image' => 'https://stars.uksw.edu/uploads/berita/Cover_DISPENSASI_UANG_KULIAH_SEMESTER_GENAP_20222023_1669693584.jpg'),
            array('id' => '2','user_id' => '1','category_id' => '2', 'title' => 'DISPENSASI UANG PEMBANGUNAN SEMESTER GENAP 2022/2023
          ','subtitle'=> 'Dispensasi Uang Pembangunan Semester Genap 2022/2023', 'category' => 'Dispensasi', 'type' => 'Dispensasi Uang Pembangunan', 'description' => 'Dispensasi Uang Pembangunan Semester Genap 2022/2023', 'image' => 'https://stars.uksw.edu/uploads/berita/Cover_DISPENSASI_UANG_PEMBANGUNAN_SEMESTER_GENAP_20222023_1669693663.jpg'),
            array('id' => '3','user_id' => '1','category_id' => '1', 'title' => 'BEASISWA RUTIN PERPANJANGAN SEM II 2022/2023
          ', 'subtitle'=> 'Beasiswa Rutin Perpanjang Sem II 2022/2023','category' => 'Beasiswa', 'type' => 'Beasiswa Rutin', 'description' => 'Kami informasikan daftar penerima Beasiswa Rutin Perpanjangan Semester II Tahun Ajaran 2022/2023.
          
          Proses pencairan beasiswa dapat datang langsung ke Loket Beasiswa di Kantor Lembaga Layanan Kemahasiswaan, Gedung Administrasi Pusat, atau melalui email dengan ketentuan:
          
           
          
          Telah melakukan Registrasi Ulang Semester Genap 2022/2023
          
           
          
          Mengirimkan email ke bikem@adm.uksw.edu dengan subject: "NAMA BEASISWA - NIM/NAMA" menggunakan email student masing-masing.
          
           
          
          Menyertakan Screenshot atau hasil download Tagihan di SIASAT.
          
           
          
          Contoh prosedur pencairan beasiswa dapat dilihat di instagram @llk_uksw melalui link berikut https://bit.ly/3ii38Hx
          
          
          Email beasiswa hanya melalui bikem@adm.uksw.edu.
          
          Untuk selanjutnya, dimohon mahasiswa dapat tetap mengaktifkan email student, dan follow media sosial LLK UKSW untuk tetap update informasi Beasiswa selanjutnya.
          
          Terima kasih.
          
           ', 'image' => 'https://stars.uksw.edu/uploads/berita/Cover_BEASISWA_RUTIN_PERPANJANGAN_SEM_II_20222023_1669688620.jpg'),
            array('id' => '7','user_id' => '1','category_id' => '3', 'title' => 'PENGUMUMAN PENERIMA BEASISWA INTERNAL UKSW 2022-2023','subtitle'=> 'test', 'category' => 'KIP', 'type' => 'KIP KULIAH 202', 'description' => 'lorem ipsum dolor ', 'image' => 'https://stars.uksw.edu/uploads/berita/Cover_PENGUMUMAN_PENERIMA_BEASISWA_INTERNAL_UKSW_2022-2023_1668752568.png'),
            array('id' => '8','user_id' => '1','category_id' => '3', 'title' => 'PENGUMUMAN PENERIMA BEASISWA KIP KULIAH (USULAN MASYARAKAT) 2022-2023 ','subtitle'=> 'test', 'category' => 'KIP', 'type' => 'KIP KULIAH 2022', 'description' => 'lorem ipsum dolorler sdaf sadf ', 'image' => 'https://stars.uksw.edu/uploads/berita/Cover_PENGUMUMAN_PENERIMA_BEASISWA_KIP_KULIAH_USULAN_MASYARAKAT_2022-2023_1668752468.png'),
            array('id' => '10','user_id' => '1','category_id' => '3', 'title' => 'PENGUMUMAN PENERIMA BEASISWA KIP KULIAH (REGULER) 2022-2023 ','subtitle'=> 'test', 'category' => 'KIP', 'type' => 'KIP KULIAH 2022', 'description' => '2022/2023.
          
          Mahasiswa yang tercantum dalam daftar wajib mengikuti pembekalan yang akan diadakan pada
          
          Hari/tanggal: Senin, 17 Oktober 2022
          
          Tempat       : E126
          
          Waktu         : 09.00 - selesai
          
           
          
          *Mahasiswa diharapkan menyiapkan 2 lembar Materai Rp 10.000 
          
          **Akan disediakan surat izin bagi mahasiswa yang ada jadwal kuliah di jam tsb.
          
          Terima kasih.', 'image' => 'https://stars.uksw.edu/uploads/berita/Cover_PENGUMUMAN_PENERIMA_BEASISWA_KIP_KULIAH_REGULER_2022-2023_1665635665.jpg')
        );

        foreach ($tb_mahasiswa as $tb) {
            Pengumuman::create([
                'user_id' => 1000,
                'category_id' => $tb['category_id'],
                'title' => $tb['title'], 
                'subtitle' => $tb['subtitle'], 
                // 'category' => $tb['category'],
                'type' => $tb['type'],
                'description' => $tb['description'],
                'image' => $tb['image'],
            ]);
        }
    }
}
