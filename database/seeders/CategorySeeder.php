<?php

namespace Database\Seeders;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $categories = [
            [
                'name' => 'Piel',
                'slug' => Str::slug('Piel'),
                'icon' =>'<i class="fas fa-female"></i>'

            ],

            [
                'name' => 'Ojos',
                'slug' => Str::slug('Ojos'),
                'icon' => '<i class="far fa-eye"></i>'

            ],


            [
                'name' => 'Labios',
                'slug' => Str::slug('Labios'),
                'icon' => '<i class="fas fa-grin-alt"></i>'

            ],

            [
                'name' => 'Cabello',
                'slug' => Str::slug('Cabello'),
                'icon' => '<i class="fas fa-air-freshener"></i>'

            ],

            [
                'name' => 'Uñas',
                'slug' => Str::slug('Uñas'),
                'icon' => '<i class="fas fa-hand-sparkles"></i>'

            ],

            [
                'name' => 'Aseo e Higiene Personal',
                'slug' => Str::slug('Aseo e Higiene Personal'),
                'icon' => '<i class="fas fa-pump-soap"></i>'

            ],

            [
                'name' => 'Productos Depilatorios',
                'slug' => Str::slug('Productos Depilatorios'),
                'icon' => '<i class="fas fa-ring"></i>'

            ],

            [
                'name' => 'Bronceado y Protección Solar',
                'slug' => Str::slug('Bronceado y Protección Solar'),
                'icon' => '<i class="fas fa-sun"></i>'

            ],

            [
                'name' => 'Perfumeria',
                'slug' => Str::slug('Perfumeria'),
                'icon' => '<i class="fas fa-magic"></i>'

            ],

        ];

        foreach ($categories as $category ){
            $category = Category::factory(1)->create($category)->first();

            $brands = Brand::factory(4)->create();

            foreach($brands as $brand){
                $brand->categories()->attach($category->id);
            }
        }
    }
}
