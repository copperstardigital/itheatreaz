<?php namespace App\Models;

class Production extends \Eloquent {
	protected $fillable = [];

    public function season() {
        return $this->hasOne('App\Models\Season', 'season_id');
    }
}