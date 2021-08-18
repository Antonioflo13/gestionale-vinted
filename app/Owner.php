<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Owner extends Model
{
    protected $fillable = [
        'owner_name',
        'owner_surname',
        'owner_percentage'
    ];

    public function revenue() {
        return $this->belongsTo('App\Revenue');
    }

    public function product() {
        return $this->belongsTo('App\Product');
    }
}
