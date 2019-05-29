<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ColorPalette extends Model
{
    //

    protected $table = 'post_color_palette';

    protected $fillable = ['color'];

    public function post(){
        return $this->belongsTo(Post::class);
    }
  
}