<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FasilitasUmum;
use Carbon\Carbon;

class FasilitasUmumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FasilitasUmum::truncate();

        $fasilitasumum = [
            [                
                'fasilitas_umum' => 'Pantai',
                'keterangan' => 'Depan Pintu jalan 300m kedepan',
                'gambar_fasilitas' => 'fasilitasumum/pantai.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'fasilitas_umum' => 'Biliard',
                'keterangan' => 'Lantai 3 dekat esklator',
                'gambar_fasilitas' => 'fasilitasumum/biliard.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'fasilitas_umum' => 'GYM',
                'keterangan' => 'Lantai 4 dekat WC',
                'gambar_fasilitas' => 'fasilitasumum/gym.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'fasilitas_umum' => 'Sauna',
                'keterangan' => 'Lantai 5 samping Rumah kucing',
                'gambar_fasilitas' => 'fasilitasumum/sauna.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'fasilitas_umum' => 'Perpustakaan',
                'keterangan' => 'Lantai 2 Luas 200m persegi',
                'gambar_fasilitas' => 'fasilitasumum/perpustakaan.jpeg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'fasilitas_umum' => 'Restoran',
                'keterangan' => 'Lantai 6 samping Rumah Jerapah',
                'gambar_fasilitas' => 'fasilitasumum/restoran.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ];

        FasilitasUmum::insert($fasilitasumum);
    }
}
