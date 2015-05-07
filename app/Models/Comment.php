<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model {

	protected $fillable = ['comment'];

    public function production() {
        return $this->hasMany('App\Models\Production');
    }
}
