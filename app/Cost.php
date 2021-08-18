<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cost extends Model
{
    protected $fillable = [
        'typology',
        'cost_price',
    ];

    public function partner() {
        return $this->belongsTo('App\Partner');
    }

    public function cost() {
        return $this->hasOne('App\Product');
    }
}
