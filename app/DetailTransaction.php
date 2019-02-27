<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DetailTransaction extends Model
{
    protected $fillable = ['product_id','transaction_id','user_id','qty','price','subtotal'];

    public function transaction(){
        return $this->belongsTo(Transaction::class);
    }

    public function product(){
        return $this->belongsTo(Product::class);
    }
}
