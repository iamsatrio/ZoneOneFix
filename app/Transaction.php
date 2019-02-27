<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $fillable = ['total','payment_method','user_id','status','payment_proof','code'];

    public function user(){
        return $this->belongsTo(User::class);
    }

    public function shipment(){
        return $this->hasOne(Shipment::class);
    }

    public function detailTransaction(){
        return $this->hasMany(DetailTransaction::class);
    }
}
