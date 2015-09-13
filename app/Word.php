<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Word extends Model
{
	protected $table = 'words';

	public function category ()
	{
		return $this->belongsTo('App\Category');
	}

	public function answers ()
	{
		return $this->hasMany('App\Answer');
	}
}
