<?php namespace App\Models;

class Season extends \Eloquent {
	protected $fillable = [];

    public function production() {
        return $this->BelongsTo('App\Models\Production');
    }
}