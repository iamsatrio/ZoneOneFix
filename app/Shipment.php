<?php

namespace App;

use App\Model\District;
use App\Model\Province;
use App\Model\Regency;
use App\Model\Village;
use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = ['name','email','address','phone','transaction_id','province_id','regency_id','district_id','village_id','zipcode','shipping_method','shipping_cost'];

    public function transaction()
    {
        return $this->belongsTo(Transaction::class,'transaction_id');
    }

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function regency()
    {
        return $this->belongsTo(Regency::class);
    }

    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function village()
    {
        return $this->belongsTo(Village::class,'village_id');
    }
}
