<?php

use Illuminate\Database\Seeder;
use AzisHapidin\IndoRegion\RawDataGetter;

class IndoRegionProvinceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @deprecated
     * 
     * @return void
     */
    public function run()
    {
        $provinces = RawDataGetter::getProvinces();
        DB::table('provinces')->insert($provinces);
    }
}
