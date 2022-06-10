<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Reservasi;
use Carbon\Carbon;

class ReservasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Reservasi::truncate();

        $reservasi = [
            [               
                'kamar_id' => 1,
                'nama_pemesan' => 'farhan',
                'nama_tamu' => 'Toto',
                'email' => 'farhan@gmail.com',
                'no_handphone' => '085819831',
                'jumlah_kamar' => 2,
                'total_harga' => 1000000,
                'tanggal_checkin' => '2022-03-28',
                'tanggal_checkout' => '2022-03-29',
                'status' => 'checkin',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'kamar_id' => 2,
                'nama_pemesan' => 'farhan',
                'nama_tamu' => 'Doko',
                'email' => 'farhan@gmail.com',
                'no_handphone' => '085819831',
                'jumlah_kamar' => 2,
                'total_harga' => 2000000,
                'tanggal_checkin' => '2022-03-29',
                'tanggal_checkout' => '2022-04-01',
                'status' => 'checkin',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'kamar_id' => 3,
                'nama_pemesan' => 'farhan',
                'nama_tamu' => 'Jajang',
                'email' => 'farhan@gmail.com',
                'no_handphone' => '085819831',
                'jumlah_kamar' => 2,
                'total_harga' => 10000000,
                'tanggal_checkin' => '2022-03-25',
                'tanggal_checkout' => '2022-04-03',
                'status' => 'checkin',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'kamar_id' => 3,
                'nama_pemesan' => 'farhan',
                'nama_tamu' => 'Ada',
                'email' => 'farhan@gmail.com',
                'no_handphone' => '085819831',
                'jumlah_kamar' => 4,
                'total_harga' => 10000000,
                'tanggal_checkin' => '2022-03-25',
                'tanggal_checkout' => '2022-04-03',
                'status' => 'checkin',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'kamar_id' => 3,
                'nama_pemesan' => 'farhan',
                'nama_tamu' => 'Baba',
                'email' => 'farhan@gmail.com',
                'no_handphone' => '085819831',
                'jumlah_kamar' => 4,
                'total_harga' => 10000000,
                'tanggal_checkin' => '2022-03-25',
                'tanggal_checkout' => '2022-04-03',
                'status' => 'checkin',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'kamar_id' => 3,
                'nama_pemesan' => 'farhan',
                'nama_tamu' => 'Kasdun',
                'email' => 'farhan@gmail.com',
                'no_handphone' => '085819831',
                'jumlah_kamar' => 4,
                'total_harga' => 10000000,
                'tanggal_checkin' => '2022-03-25',
                'tanggal_checkout' => '2022-04-03',
                'status' => 'checkin',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'kamar_id' => 3,
                'nama_pemesan' => 'farhan',
                'nama_tamu' => 'Roni',
                'email' => 'farhan@gmail.com',
                'no_handphone' => '085819831',
                'jumlah_kamar' => 4,
                'total_harga' => 10000000,
                'tanggal_checkin' => '2022-03-25',
                'tanggal_checkout' => '2022-04-03',
                'status' => 'checkin',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'kamar_id' => 3,
                'nama_pemesan' => 'farhan',
                'nama_tamu' => 'Epen',
                'email' => 'farhan@gmail.com',
                'no_handphone' => '085819831',
                'jumlah_kamar' => 4,
                'total_harga' => 10000000,
                'tanggal_checkin' => '2022-03-25',
                'tanggal_checkout' => '2022-04-03',
                'status' => 'checkin',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ],
            [                
                'kamar_id' => 3,
                'nama_pemesan' => 'farhan',
                'nama_tamu' => 'Ilham',
                'email' => 'farhan@gmail.com',
                'no_handphone' => '085819831',
                'jumlah_kamar' => 4,
                'total_harga' => 10000000,
                'tanggal_checkin' => '2022-03-25',
                'tanggal_checkout' => '2022-04-03',
                'status' => 'checkin',
                'created_at' => Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => Carbon::now()->format('Y-m-d H:i:s'),
            ]
        ];

        Reservasi::insert($reservasi);
    }
}
