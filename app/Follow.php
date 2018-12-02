<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Follow extends Model
{
    public function follows(){
        return $this->belongsTo("App\User", 'following_id');
    }
}
