<?php

use App\Product;
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
        Product::create([
          'name'=>'Mac Book Pro 15" 2016',
          'price'=>20000000,
          'stock'=>50,
          'discount'=>0,
          'category_id'=>1
        ]);

        Product::create([
          'name'=>'Lightning Cable 3,5mm',
          'price'=>300000,
          'stock'=>50,
          'discount'=>0,
          'category_id'=>4
        ]);

        Product::create([
          'name'=>'iPhone XR 256 GB Black',
          'price'=>18000000,
          'stock'=>10,
          'discount'=>0,
          'category_id'=>2
        ]);

        Product::create([
          'name'=>'DJI+ Drone White (Limited)',
          'price'=>20000000,
          'stock'=>20,
          'discount'=>0,
          'category_id'=>3
        ]);

        Product::create([
          'name'=>'iPhone 8+ 256 White',
          'price'=>16000000,
          'stock'=>10,
          'discount'=>1000000,
          'category_id'=>2,
          'status'=>'Sale'
        ]);

        Product::create([
            'name'=>'iPad Pro 512 GB White',
            'price'=>20000000,
            'stock'=>10,
            'discount'=>0,
            'category_id'=>2
        ]);

        Product::create([
            'name'=>'Apple Watch 2',
            'price'=>5000000,
            'stock'=>10,
            'discount'=>0,
            'category_id'=>4,
            'status'=>'Sale'
        ]);

        Product::create([
            'name'=>'JBL Speaker Black',
            'price'=>3000000,
            'stock'=>10,
            'discount'=>0,
            'category_id'=>4,
            'status'=>'Hot'
        ]);

        Product::create([
            'name'=>'Bose Speaker Grey',
            'price'=>3000000,
            'stock'=>10,
            'discount'=>0,
            'category_id'=>4
        ]);

        Product::create([
          'name'=>'JBL Headphone HiFi',
          'price'=>2000000,
          'stock'=>10,
          'discount'=>0,
            'category_id'=>4
        ]);
    }
}
