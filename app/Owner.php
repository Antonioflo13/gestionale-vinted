<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    public function revenue() {
        return $this->belongsTo('App\Revenue');
    }

    public function product() {
        return $this->hasMany('App\Product');
    }
}
