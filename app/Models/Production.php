<?php namespace App\Models;

class Production extends \Eloquent {
	protected $fillable = [];

    public function season() {
        return $this->hasOne('App\Models\Season');
    }

    public function comments() {
        return $this->hasMany('App\Models\Comment');
    }

    public function actors() {
        return $this->belongsToMany('App\Models\User', 'actor_production', 'production_id', 'user_id')->orderBy('last_name')->withPivot('roles');
    }

    public function crew() {
        return $this->hasMany('App\Models\User', 'crew_production', 'production_id', 'user_id')->orderBy('last_name')->withPivot('roles');
    }

    public function playwrights() {
        return $this->belongsToMany('App\Models\User', 'playwright_production', 'production_id', 'user_id');
    }
}