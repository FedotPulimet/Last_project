<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        Product::create([
            'name' => 'Картина "Морской пейзаж"',
            'description' => 'Красочная картина с морским пейзажем.',
            'price' => 1500.00,
            'image' => 'images/products/morskoy-peizhas.jpg'
        ]);

        Product::create([
            'name' => 'Картина "Городская ночь"',
            'description' => 'Современная картина ночного города.',
            'price' => 2000.00,
            'image' => 'images/products/nochnoy-gorod.jpg'
        ]);
    }
}