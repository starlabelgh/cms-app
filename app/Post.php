<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    public function user(){

        return $this->belongsTo('App\User');

    }

    public function photo(){
        return $this->morphMany('App\Photo', 'imageable');
    }

    public function tage(){
        return $this->morphToMany('App\Tag', 'taggable');
    }
}
