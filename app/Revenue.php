<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{  
    protected $fillable = [
        'sale_price',
        'purchase_price',
        'revenue',
        'percentage_revenue',
        'owner_revenue'
    ];

    public function product() {
        return $this->hasOne('App\Product');
    }
    public function owner() {
        return $this->belongsTo('App\Owner');
    }
    public function partner() {
        return $this->belongsTo('App\Partner');
    }
}
