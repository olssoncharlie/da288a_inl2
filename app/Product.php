<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Product extends Model
{
    public function getReviews(){
        return $this->hasMany('App\Review')->get();
    }

    public function getStores(){
        return $this->belongsToMany('App\Store')->get();
    }

    public function stores() {
        return $this->belongsToMany('App\Store');
    }
}