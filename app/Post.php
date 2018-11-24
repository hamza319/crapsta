<?php

namespace Tinygram;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	public function comments(){
		return $this->hasMany("Tinygram\Comment");
	}
    //
}
