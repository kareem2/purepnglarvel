<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColorPlatte extends Model
{
    //

    protected $table = 'post_color_palette';

    public function post(){
        return $this->belongsTo(Post::class);
    }
  
}