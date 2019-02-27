<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Province;
use App\Model\Regency;
use App\Model\District;
use App\Model\Village;

class IndonesiaController extends Controller
{
    //Kota / Kabupaten
    public function regency(Request $request){
        if ($request->ajax()) {
            $regencies = Regency::where('province_id', $request->province_id)->get();
            $output = '';
            if ($regencies) {
                foreach ($regencies as $regency) {
                    $output .= '<option value="'.$regency->id.'">'.$regency->name.'</option>';
                }
                echo $output;
            }

        }
    }

    //Kecamatan
    public function district(Request $request){
        $districts = District::where('regency_id', $request->regency_id)->get();
        $output = '';
        if ($districts) {
            foreach ($districts as $district) {
                $output .= '<option value="'.$district->id.'">'.$district->name.'</option>';
            }
            echo $output;
        }
    }

    //Kelurahan
    public function village(Request $request){
        $villages = Village::where('district_id',$request->district_id)->get();
        $output = '';
        if ($villages) {
            foreach ($villages as $village) {
                $output .= '<option value="'.$village->id.'">'.$village->name.'</option>';
            }
            echo $output;
        }
    }
}
