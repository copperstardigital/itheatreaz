<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
    public function productions() {
        return $this->belongsToMany('App\Models\Production', 'actor_production');
    }
}
