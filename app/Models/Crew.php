<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    protected $table = 'crew';

    public function productions() {
        return $this->belongsToMany('App\Models\Production');
    }
}
