<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    public function cost() {
        return $this->hasOne('App\Cost');
    }

    public function revenue() {
        return $this->hasOne('App\Revenue');
    }
}
