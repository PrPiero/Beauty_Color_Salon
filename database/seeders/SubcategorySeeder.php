<?php

namespace Database\Seeders;

use App\Models\Subcategory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class SubcategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $subcategories =[
            //piel
            [
                'category_id' => 1,
                'name' => 'Rubores',
                'slug' => Str::slug('Rubores'),
                'color' => true,
                
            ],

            [
                'category_id' => 1,
                'name' => 'Polvos Faciales',
                'slug' => Str::slug('Polvos Faciales'),
                'color' => true,
                
            ],

            [
                'category_id' => 1,
                'name' => 'Base De Maquillaje',
                'slug' => Str::slug('Base De Maquillaje'),
                'color' => true,
                
            ],

            [
                'category_id' => 1,
                'name' => 'Correctores Faciles',
                'slug' => Str::slug('Correctores Faciles'),
                'color' => true,
                
            ],

            [
                'category_id' => 1,
                'name' => 'Maquillaje',
                'slug' => Str::slug('Maquillaje'),
                
                
            ],

            [
                'category_id' => 1,
                'name' => 'Cremas Faciales',
                'slug' => Str::slug('Cremas Faciales'),
                
            ],

            [
                'category_id' => 1,
                'name' => 'Lociones Faciales',
                'slug' => Str::slug('Lociones Faciales'),
                'size' => true
            ],

            [
                'category_id' => 1,
                'name' => 'Cremas Para Manos y Cuerpo',
                'slug' => Str::slug('Cremas Para Manos y Cuerpo'),
                'size' => true
            ],

            [
                'category_id' => 1,
                'name' => 'Talcos Para Los Pies',
                'slug' => Str::slug('Talcos Para Los Pies'),
                'size' => true
            ],

            [
                'category_id' => 1,
                'name' => 'Mascaras Faciales',
                'slug' => Str::slug('Mascaras Faciales'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 1,
                'name' => 'Cremas Blanqueadoras',
                'slug' => Str::slug('Cremas Blanqueadoras'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 1,
                'name' => 'Lociones Blanqueadoras',
                'slug' => Str::slug('Lociones Blanqueadoras'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 1,
                'name' => 'Otros Productos Para La Piel',
                'slug' => Str::slug('Otros Productos Para La Piel'),
                'color' => true,
                'size' => true
            ],
            //Ojos
            [
                'category_id' => 2,
                'name' => 'Lapiz De Cejas',
                'slug' => Str::slug('Lapiz De Cejas'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 2,
                'name' => 'Lapiz De Ojos',
                'slug' => Str::slug('Lapiz De Ojos'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 2,
                'name' => 'Delineador',
                'slug' => Str::slug('Delineador'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 2,
                'name' => 'Sombras de Ojos',
                'slug' => Str::slug('Sombras de Ojos'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 2,
                'name' => 'Mascaras Para Pestañas',
                'slug' => Str::slug('Mascaras Para Pestañas'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 2,
                'name' => 'Otros Productos Para Los Ojos',
                'slug' => Str::slug('Otros Productos Para Los Ojos'),
                'color' => true,
                'size' => true
            ],

            //Labios
            [
                'category_id' => 3,
                'name' => 'Lapiz Labial',
                'slug' => Str::slug('Lapiz Labial'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 3,
                'name' => 'Brillo Labial',
                'slug' => Str::slug('Brillo Labial'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 3,
                'name' => 'Protectores Labiales',
                'slug' => Str::slug('Protectores Labiales'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 3,
                'name' => 'Delineadores Labiales',
                'slug' => Str::slug('Delineadores Labiales'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 3,
                'name' => 'Otros Productos Para Los Labios',
                'slug' => Str::slug('Otros Productos Para Los Labios'),
                'color' => true,
                'size' => true
            ],
            //Cabello
            [
                'category_id' => 4,
                'name' => 'Tintes Para El Cabello',
                'slug' => Str::slug('Tintes Para El Cabello'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 4,
                'name' => 'Aerosoles Para Dar Color',
                'slug' => Str::slug('Aerosoles Para Dar Color'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 4,
                'name' => 'Iluminador De Cabello',
                'slug' => Str::slug('Iluminador De Cabello'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 4,
                'name' => 'Shampoo',
                'slug' => Str::slug('Shampoo'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 4,
                'name' => 'Reacondicionador',
                'slug' => Str::slug('Reacondicionador'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 4,
                'name' => 'Decolorantes Del Cabello',
                'slug' => Str::slug('Decolorantes Del Cabello'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 4,
                'name' => 'Laca',
                'slug' => Str::slug('Laca'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 4,
                'name' => 'Permanentes',
                'slug' => Str::slug('Permanentes'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 4,
                'name' => 'Laceadores',
                'slug' => Str::slug('Laceadores'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 4,
                'name' => 'Neutralizadores',
                'slug' => Str::slug('Neutralizadores'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 4,
                'name' => 'Otros Productos Para El Cabello',
                'slug' => Str::slug('Otros Productos Para El Cabello'),
                'color' => true,
                'size' => true
            ],
            //Uñas
            [
                'category_id' => 5,
                'name' => 'Base De Esmalte',
                'slug' => Str::slug('Base De Esmalte'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 5,
                'name' => 'Cremas Para Uñas',
                'slug' => Str::slug('Cremas Para Uñas'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 5,
                'name' => 'Esmalte',
                'slug' => Str::slug('Esmalte'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 5,
                'name' => 'Removedor De Esmalte',
                'slug' => Str::slug('Removedor De Esmalte'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 5,
                'name' => 'Otros Productos Para Las Uñas',
                'slug' => Str::slug('Otros Productos Para Las Uñas'),
                'color' => true,
                'size' => true
            ],
            //Aseo e Higiene Personal
            [
                'category_id' => 6,
                'name' => 'Aceites De Baño',
                'slug' => Str::slug('Aceites De Baño'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 6,
                'name' => 'Sales De Baño',
                'slug' => Str::slug('Sales De Baño'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 6,
                'name' => 'Burbujas y Geles De Baño',
                'slug' => Str::slug('Burbujas y Geles De Baño'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 6,
                'name' => 'Otros Productos de Aseo Personal',
                'slug' => Str::slug('Otros Productos de Aseo Personal'),
                'color' => true,
                'size' => true
            ],
            //Productos Depilatorios
            [
                'category_id' => 7,
                'name' => 'Ceras Depilatorias',
                'slug' => Str::slug('Ceras Depilatorias'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 7,
                'name' => 'Cremas Depilatorias',
                'slug' => Str::slug('Cremas Depilatorias'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 7,
                'name' => 'Aceites Depilatorios',
                'slug' => Str::slug('Aceites Depilatorios'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 7,
                'name' => 'Gel Depilatorio',
                'slug' => Str::slug('Gel Depilatorio'),
                'color' => true,
                'size' => true
            ],
            
            //Bronceado y Proteccion Solar
            [
                'category_id' => 8,
                'name' => 'Aceites Bronceadores',
                'slug' => Str::slug('Aceites Bronceadores'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 8,
                'name' => 'Cremas Bronceadoras',
                'slug' => Str::slug('Cremas Bronceadoras'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 8,
                'name' => 'Lociones Bronceadoras',
                'slug' => Str::slug('Lociones Bronceadoras'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 8,
                'name' => 'Bloqueadores Solares',
                'slug' => Str::slug('Bloqueadores Solares'),
                'color' => true,
                'size' => true
            ],
            //Perfumeria
            [
                'category_id' => 9,
                'name' => 'Perfumes',
                'slug' => Str::slug('Perfumes'),
                'color' => true,
                'size' => true
            ],

            [
                'category_id' => 9,
                'name' => 'Colonias',
                'slug' => Str::slug('Colonias'),
                'color' => true,
                'size' => true
            ],
        ];

        foreach($subcategories as $subcategory){

            Subcategory::factory(1)->create($subcategory);
        }
    }
}
