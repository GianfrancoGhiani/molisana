<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $products = config('products.products');
        foreach($products as $product){
            $newproduct = new Product();
            $newproduct->title = $product['titolo'];
            $newproduct->description = $product['descrizione'];
            $newproduct->type = $product['tipo'];
            $newproduct->image = $product['src-h'];
            $newproduct->cooking_time = $product['cottura'];
            $newproduct->weight = $product['peso'];
            $newproduct->save();

        }

    }
}
