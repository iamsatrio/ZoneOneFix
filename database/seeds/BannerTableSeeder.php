<?php

use Illuminate\Database\Seeder;
use App\Banner;

class BannerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Banner::create([
        	'image'=>'image1',
        	'title'=>'Image 1',
        	'desc'=>'lorem ipsum 1',
        	'category'=>'carousel',
        	'user_id'=>1
        ]);

        Banner::create([
        	'image'=>'image2',
            'title'=>'Image 2',
            'desc'=>'lorem ipsum 2',
        	'category'=>'carousel',
        	'user_id'=>1
        ]);

        Banner::create([
        	'image'=>'image3',
            'title'=>'Image 3',
            'desc'=>'lorem ipsum 3',
        	'category'=>'carousel',
        	'user_id'=>1
        ]);

        Banner::create([
        	'image'=>'image4',
            'title'=>'Image 4',
            'desc'=>'lorem ipsum 4',
        	'category'=>'banner1',
        	'user_id'=>1
        ]);

        Banner::create([
        	'image'=>'image5',
            'title'=>'Image 5',
            'desc'=>'lorem ipsum 5',
        	'category'=>'banner2',
        	'user_id'=>1
        ]);

        Banner::create([
        	'image'=>'image6',
            'title'=>'Image 6',
            'desc'=>'lorem ipsum 6',
        	'category'=>'footer',
        	'user_id'=>1
        ]);
    }
}
