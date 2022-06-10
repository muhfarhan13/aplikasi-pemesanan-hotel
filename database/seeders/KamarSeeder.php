<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Kamar;
use Carbon\Carbon;

class KamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Kamar::truncate();

        $kamar = [
            [                
                'tipe' => 'Deluxe',
                'harga_kamar' => '500000',
                'jumlah_kamar' => '44',
                'gambar_kamar' => 'kamar/deluxe.jpeg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'tipe' => 'Omaga',
                'harga_kamar' => '1000000',
                'jumlah_kamar' => '24',
                'gambar_kamar' => 'kamar/super.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'tipe' => 'Crazy Rich',
                'harga_kamar' => '5000000',
                'jumlah_kamar' => '10',
                'gambar_kamar' => 'kamar/crazyrich.jpg',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ];

        Kamar::insert($kamar);
    }
}
