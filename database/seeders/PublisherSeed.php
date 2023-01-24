<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PublisherSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('publishers')->insert([
            'name' => "Dutton Books",
            'address' => "Valley Village, Los Angeles",
            'email' => "DuttonBooks@yahoo.com",
            'phone' => "081313131313",
            'image' => 'imagesPub/dutton.png'
        ]);

        DB::table('publishers')->insert([
            'name' => "Gagas Media",
            'address' => "Tanah Abang, Kota Jakarta Pusat,",
            'email' => "gagasmedia@yahoo.com",
            'phone' => "081313131312",
            'image' => 'imagesPub/gagas.jpg'
        ]);

        DB::table('publishers')->insert([
            'name' => "Elex Media Komputindo",
            'address' => "Jagakarsa, Kota Jakarta Selatan,",
            'email' => "elexmedia@yahoo.com",
            'phone' => "081313131315",
            'image' => 'imagesPub/Elex.png'
        ]);

        DB::table('publishers')->insert([
            'name' => "Rak Buku",
            'address' => "Cimanggis, Depok, Jawa Barat.",
            'email' => "rakbuku@yahoo.com",
            'phone' => "081313131314",
            'image' => 'imagesPub/rak.jpg'
        ]);
    }
}
