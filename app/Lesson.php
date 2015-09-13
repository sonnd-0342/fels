<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
	protected $table = 'lessons';

	public function category ()
	{
		return $this->belongsTo('App\Category');
	}
}
