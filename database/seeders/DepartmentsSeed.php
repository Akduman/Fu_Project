<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DepartmentsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
        DB::table('departments')->insert(
            [
                    [
                        'name' => 'Adli Bilşim Mühendisliği', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Bilgisayar Mühendisliği', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Biyoloji', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Biyomühendislik', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Biyoteknoloji', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Çevre Mühendisliği', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Ekobilişim', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Elektrik Elektronik Mühendisliği', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Elektrik Elektronik Mühendisliği Teknolojileri', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Enerji Sistemleri Mühendisliği', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Fizik', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'İnşaat Mühendisliği', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'İnşaat Mühendisliği Teknolojileri', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'İstatistik', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'İş Mühendislik Yönetimi ', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Jeodezi ve Coğrafi Bilgi Teknolojileri', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Jeoloji Mühendisliği', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Kimya', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Kimya Mühendisliği', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Makine Mühendisliği', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Makine Mühendisliği Teknolojileri', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Matematik', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Mekatronik Mühendisliği', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Metaluji ve Malzeme Mühendisliği', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Metaluji ve Malzeme Mühendisliği Teknolojileri', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Mimarlık', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Otomotiv Mühendisliği', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Savunma Teknolojileri', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Su Ürünleri Avlanma ve İşleme Teknolojileri ', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Su Ürünleri Temel Bilimler', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Su Ürünleri Yetiştiriciliği', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Yazılım Mühendisliği', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Elektrik Eğitimi', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Elektronik ve Bilgisayar Eğitimi', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Makine Eğitimi', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Metalurji Eğitimi', 'created_at' => now(),                       
                    ],
                    [
                        'name' => 'Yapı Eğitimi', 'created_at' => now()                       
                    ] ,
                    [
                        'name' => 'test_seed', 'created_at' => now()                       
                    ]  ,         

            ]                             
    );
    }
}
