<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
   protected $guarded = ['id'];

    function post(){
        return $this->morphTo();
    }
}
