<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function revenue() {
        return $this->hasOne('App\Revenue');
    }
}
