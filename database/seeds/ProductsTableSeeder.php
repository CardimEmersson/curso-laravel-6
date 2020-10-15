<?php

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::created([
            'name' => 'Teste', 
            'price' => 30.30,
            'description' => 'Teste 123',
             'image' => 'teste.png'
        ]);
    }
}
