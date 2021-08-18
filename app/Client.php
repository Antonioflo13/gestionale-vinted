<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'username'
    ];

    public function product() {
        return $this->hasMany('App\Product');
    }
}
