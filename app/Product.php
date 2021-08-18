<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
        'name_product',
        'brand',
        'typology',
        'slug'
    ];

    public function revenue() {
        return $this->hasOne('App\Revenue');
    }

    public function owner() {
        return $this->hasOne('App\Owner');
    }

    public function cost() {
        return $this->belongsTo('App\Cost');
    }

    public function client() {
        return $this->belongsTo('App\Client');
    }

    public function shipment() {
        return $this->hasOne('App\Shipment');
    }
}
