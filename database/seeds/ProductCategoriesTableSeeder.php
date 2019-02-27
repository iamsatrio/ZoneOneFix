<?php

use App\ProductCategory;
use Illuminate\Database\Seeder;

class ProductCategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ProductCategory::create([
          'name'=>'Mac'
        ]);

        ProductCategory::create([
          'name'=>'Phone'
        ]);

        ProductCategory::create([
          'name'=>'Camera'
        ]);

        ProductCategory::create([
          'name'=>'Accessories'
        ]);
    }
}
