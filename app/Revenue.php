<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Revenue extends Model
{
    public function product() {
        return $this->belongsTo('App\Product');
    }
    public function owner() {
        return $this->belongsTo('App\Owner');
    }
    public function partner() {
        return $this->belongsTo('App\Partner');
    }
}
