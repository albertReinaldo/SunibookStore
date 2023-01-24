<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BookSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('books')->insert([
            'publishers_id' => 1,
            'title' => "Paper Towns",
            'author' => "John Green",
            'year' => 2008,
            'synopsis' => "Quentin Jacobsen has spent a lifetime loving the magnificently adventurous Margo Roth Spiegelman from afar",
            'image' => 'papertown.jpg',
            'price' => 70000
        ]);

        DB::table('books')->insert([
            'publishers_id' => 1,
            'title' => "Turtles All the Way Down",
            'author' => "John Green",
            'year' => 2017,
            'synopsis' => "Aza tidak pernah bermimpi akan terlibat pengejaran seorang milyarder berhadiah seratus ribu dolar. ",
            'image' => 'turtle.jpg',
            'price' => 100000
        ]);

        DB::table('books')->insert([
            'publishers_id' => 1,
            'title' => "Looking for Alaska",
            'author' => "John Green",
            'year' => 2005,
            'synopsis' => "Ada seorang siswa SMA bernama Miles (Charlie Plimmer) yang bertemu dengan seorang perempuan, Alaska (Kristine Froseth).",
            'image' => 'alaska.jpg',
            'price' => 73000
        ]);

        DB::table('books')->insert([
            'publishers_id' => 2,
            'title' => "Kisah Tanah jawa",
            'author' => "Bonaventura D. Genta",
            'year' => 2019,
            'synopsis' => "Kisah Tanah Jawa Merapi bercerita tentang petualangan Andi dan Babon dua orang bersahabat ini yang harus terpaksa mendaki merapi untuk mencari kebenaran.",
            'image' => 'kisah.jpg',
            'price' => 90000
        ]);

        DB::table('books')->insert([
            'publishers_id' => 2,
            'title' => "Kuyang",
            'author' => "Achmad Benbela",
            'year' => 2022,
            'synopsis' => "Tipuan terhebat iblis adalah saat kau percaya ia tidak ada. ",
            'image' => 'kuyang.jpg',
            'price' => 103000
        ]);

        DB::table('books')->insert([
            'publishers_id' => 2,
            'title' => "Pesta Bunuh Diri",
            'author' => "Daniel Ahmad",
            'year' => 2022,
            'synopsis' => "Sebuah peradaban kuno di sebuah hutan di pulau terpencil, dan manusia bukanlah satu-satunya penghuni.",
            'image' => 'pesta.jpg',
            'price' => 56000
        ]);

        DB::table('books')->insert([
            'publishers_id' => 3,
            'title' => "Tujuh Kelana",
            'author' => "Nellaneva",
            'year' => 2020,
            'synopsis' => "PERMATA itu adalah kunci suatu ‘gerbang’ yang telah kaumku jaga beratus-ratus tahun lamanya.",
            'image' => 'tujuh.jpg',
            'price' => 77000
        ]);

        DB::table('books')->insert([
            'publishers_id' => 3,
            'title' => "Alice in Borderland",
            'author' => "Haro aso",
            'year' => 2010,
            'synopsis' => "Serial ini mengisahkan tentang yang muda bernama Arisu Ryohei yang diperankan oleh Kento Yamazaki dan secara misterius terperangkap di sebuah dunia paralel pascakiamat. ",
            'image' => 'alice.jpg',
            'price' => 121000
        ]);

        DB::table('books')->insert([
            'publishers_id' => 3,
            'title' => "Just Let Me Know",
            'author' => "Andros Luvena",
            'year' => 2017,
            'synopsis' => "Sunny Kenneth pindah ke Indonesia untuk membuka cabang baru wedding organizer miliknya. Baru saja tiba di Jakarta, dia dikabari kalau mereka sudah mendapat klien",
            'image' => 'just.jpg',
            'price' => 70000
        ]);

        DB::table('books')->insert([
            'publishers_id' => 4,
            'title' => "Ngenest",
            'author' => "Ernest Prakasa",
            'year' => 2013,
            'synopsis' => "Nasib menentukan Ernest (Kevin Anggara/Ernest Prakasa) lahir di sebuah keluarga Cina. Ia tumbuh di masa Orde Baru saat diskriminasi terhadap etnis Cina masih kental. Bullying menjadi makanan sehari-hari.",
            'image' => 'ngenest.jpg',
            'price' => 71000
        ]);

        DB::table('books')->insert([
            'publishers_id' => 4,
            'title' => "Ngenest 2",
            'author' => "Ernest Prakasa",
            'year' => 2014,
            'synopsis' => "Lanjutan dari buku Ngenest.",
            'image' => 'ngenest2.jpg',
            'price' => 71000
        ]);

        DB::table('books')->insert([
            'publishers_id' => 4,
            'title' => "Ngenest 4",
            'author' => "Ernest Prakasa",
            'year' => 2014,
            'synopsis' => "Lanjutan dari buku Ngenest 2.",
            'image' => 'ngenest3.jpg',
            'price' => 71000
        ]);
    }
}
