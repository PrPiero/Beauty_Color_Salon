<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

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

        //para borrar las imagenes que crea el factory y por a o b le das fresh

        //Storage::deleteDirectory('categories');
        Storage::deleteDirectory('subcategories');
        Storage::deleteDirectory('products');
        //Storage::makeDirectory('categories');
        Storage::makeDirectory('subcategories');
        Storage::makeDirectory('products');

        DB::statement("TRUNCATE TABLE workers RESTART IDENTITY CASCADE");
        DB::statement("TRUNCATE TABLE subcategories RESTART IDENTITY CASCADE");
        DB::statement("TRUNCATE TABLE products RESTART IDENTITY CASCADE");
        DB::statement("TRUNCATE TABLE colors RESTART IDENTITY CASCADE");
        DB::statement("TRUNCATE TABLE color_product RESTART IDENTITY CASCADE");
        DB::statement("TRUNCATE TABLE sizes RESTART IDENTITY CASCADE");
        DB::statement("TRUNCATE TABLE color_size RESTART IDENTITY CASCADE");
        DB::statement("TRUNCATE TABLE images RESTART IDENTITY CASCADE");
        //DB::statement('SET FOREIGN_KEY_CHECKS=0;');
        $this->call(WorkersTableSeeder::class);
        //DB::statement('SET FOREIGN_KEY_CHECKS=1;');
        $this->call(UserSeeder::class);
        $this->call(CategorySeeder::class);
        $this->call(SubcategorySeeder::class);
        $this->call(ProductSeeder::class);
        $this->call(ColorSeeder::class);
        $this->call(ColorProductSeeder::class);
        $this->call(SizeSeeder::class);
        $this->call(ColorSizeSeeder::class);
    }
}
