<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Product;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name_product' =>  'Gilet Sand',
                'brand' => 'Carharhtt',
                'typology' => 'Giacche primaverili'
            ]
        ];

        foreach ($products as $product) {
            $newproduct = new Product();
            $newproduct->name_product = $product['name_product'];
            $newproduct->brand = $product['brand'];
            $newproduct->slug = Str::slug($product['name_product'], '-');
            $newproduct->typology = $product['typology'];
            
            $newproduct->save();
        }
    }
}
