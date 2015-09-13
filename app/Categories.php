<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
	protected $table = 'categories';

	public function words ()
	{
		return $this->hasMany('App\Word');
	}

	public function lessons ()
	{
		return $this->hasMany('App\Lesson');
	}
}
