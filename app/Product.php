<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function revenue() {
        return $this->hasOne('App\Revenue');
    }

    public function owner() {
        return $this->belongsTo('App\Owner');
    }

    public function cost() {
        return $this->belongsTo('App\Cost');
    }

    public function client() {
        return $this->belongsTo('App\Client');
    }

    public function shipment() {
        return $this->belongsTo('App\Shipment');
    }
}
