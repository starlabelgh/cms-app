<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    //

    public function post(){
        return $this->morphedByMany('App\Post', 'taggable');
    }

    public function video(){
        return $this->morphedByMany('App\Video', 'taggable');
    }
}
