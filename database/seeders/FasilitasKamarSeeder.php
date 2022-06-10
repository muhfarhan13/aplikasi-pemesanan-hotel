<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\FasilitasKamar;
use Carbon\Carbon;

class FasilitasKamarSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        FasilitasKamar::truncate();

        $fasilitaskamar = [
            [                
                'kamar_id' => 1,
                'fasilitas' => 'AC',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'kamar_id' => 1,
                'fasilitas' => 'TV 32 inch',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'kamar_id' => 1,
                'fasilitas' => 'Kamar 2, 20m persegi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'kamar_id' => 1,
                'fasilitas' => 'Kamar mandi Shower',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'kamar_id' => 2,
                'fasilitas' => 'AC 3',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'kamar_id' => 2,
                'fasilitas' => 'TV 40 inch',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'kamar_id' => 2,
                'fasilitas' => 'Kamar 5, 25m persegi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'kamar_id' => 2,
                'fasilitas' => 'Kamar mandi shower dan bathub',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'kamar_id' => 2,
                'fasilitas' => 'Kolam renang private 10m persegi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'kamar_id' => 3,
                'fasilitas' => 'AC 4',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'kamar_id' => 3,
                'fasilitas' => 'Bioskop',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'kamar_id' => 3,
                'fasilitas' => 'Kamar 10, 30m persegi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'kamar_id' => 3,
                'fasilitas' => 'Kamar mandi shower pemadam',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'kamar_id' => 3,
                'fasilitas' => 'Kolam renang private 20m persegi',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ];

        FasilitasKamar::insert($fasilitaskamar);
    }
}
