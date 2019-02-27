<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	protected $fillable = ['name','price','image','description','stock','discount','category_id'];

	public function productImage(){
		return $this->hasMany(ProductImage::class);
	}

	public function productCategory(){
		return $this->belongsTo(ProductCategory::class,'category_id');
	}

    public function detailTransaction(){
        return $this->hasMany(DetailTransaction::class);
    }
}
