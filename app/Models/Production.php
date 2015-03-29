<?php namespace App\Models;

class Production extends \Eloquent {
	protected $fillable = [];

    public function season() {
        return $this->hasOne('App\Models\Season');
    }

    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }
}