<?php

namespace Database\Seeders;

use App\Http\Controllers\BookCategoryController;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            PublisherSeed::class,
            CategorySeed::class,
            BookSeed::class,
            Book_CategorySeed::class,
            userSeeder::class,
            CartSeed::class
        ]);
    }
}
