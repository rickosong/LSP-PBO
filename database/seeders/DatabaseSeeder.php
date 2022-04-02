<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tbpaketcuci;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();

        Tbpaketcuci::create(
            [
                'namapaket' => 'Cuci Mobil Kecil',
		        'deskripsi' => 'Suzuki Karimun, Toyota agya, swift, ayla, jass',
		        'harga' => 40000
            ],
        );
        Tbpaketcuci::create(
            [
                'namapaket' => 'Cuci Mobil Sedang',
		        'deskripsi' => 'CRV, HRV, mobilio, civic',
		        'harga' => 45000
            ],
        );
        Tbpaketcuci::create(
            [
                'namapaket' => 'Cuci Mobil Besar',
                'deskripsi' => 'Fortuner, pajero, robicorn',
                'harga' => 50000
            ],
        );
        Tbpaketcuci::create(
            [
                'namapaket' => 'Cuci Mobil Sangat Besar',
                'deskripsi' => 'alpard, lexus, vellfire',
                'harga' => 55000
            ],
        );
    }
}
