<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductCategory extends Model
{
  protected $fillable = ['name'];

  public function product(){
    return $this->hasMany(Product::class);
  }
}
