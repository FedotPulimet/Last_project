<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Картина "Санкт-Питербург"',
            'author' => 'Летова Екатерина Сергеевна',
            'description' => 'холст, акрил',
            'leght' => '40/70',
            'price' => 5500.00,
            'image' => 'images/products/Saint-petersburg.jpg',
        ]);

        Product::create([
            'name' => 'Картина "Греческие развалины"',
            'author' => 'Летова Екатерина Сергеевна',
            'description' => 'холст, акрил, текстурная паста',
            'leght' => '20/35',
            'price' => 4000.00,
            'image' => 'images/products/grecheskie-razvalini.jpg',
            
        ]);

        Product::create([
            'name' => 'Картина "Деревья Абхазии"',
            'author' => 'Летова Екатерина Сергеевна',
            'description' => 'бумага, акрил, линер',
            'leght' => '20/30',
            'price' => 7000.00,
            'image' => 'images/products/derevia-abxazii.jpg',
            
        ]);

        Product::create([
            'name' => 'Картина "Зимнее утро"',
            'author' => 'Летова Екатерина Сергеевна',
            'description' => 'холст, акрил',
            'leght' => '40/60',
            'price' => 3500.00,
            'image' => 'images/products/zimnee-ytro.jpg',
            
        ]);

        Product::create([
            'name' => 'Картина "Старый парк"',
            'author' => 'Летова Екатерина Сергеевна',
            'description' => 'бумага, акриль, пастель',
            'leght' => '30/30',
            'price' => 6000.00,
            'image' => 'images/products/starie-park.jpg',
            
        ]);

         Product::create([
            'name' => 'Картина "Весна"',
            'author' => 'Летова Екатерина Сергеевна',
            'description' => 'холст, акрил',
            'leght' => '50/70',
            'price' => 9500.00,
            'image' => 'images/products/Priroda.jpg',
            
        ]);

         Product::create([
            'name' => 'Картина "Море"',
            'author' => 'Летова Екатерина Сергеевна',
            'description' => 'холст, текстурная краска, пастель',
            'leght' => '30/40',
            'price' => 10500.00,
            'image' => 'images/products/more.jpg',
            
        ]);

         Product::create([
            'name' => 'Картина "Спящая"',
            'author' => 'Летова Екатерина Сергеевна',
            'description' => 'холст, акриль, пастельная краска',
            'leght' => '90/120',
            'price' => 10500.00,
            'image' => 'images/products/spachaia.jpg',
            
        ]);
    }
}