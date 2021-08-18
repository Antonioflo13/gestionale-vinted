<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Shipment extends Model
{
    protected $fillable = [
        'label_code',
    ];

    public function product() {
        return $this->belongsTo('App\Product');
    }
}
