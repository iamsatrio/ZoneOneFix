<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    //
    protected $fillable = ['image','title','desc','category','user_id'];

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
