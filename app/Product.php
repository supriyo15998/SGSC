<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $guarded = [];

    public function material()
    {
    	return $this->belongsTo('App\Material');
    }
}
