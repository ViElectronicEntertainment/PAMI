<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use larapami\Product;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(larapami\Product::class, 80)->create();
    }
}
