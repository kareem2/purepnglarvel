<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $table = 'tags';

    protected $fillable = ['slug', 'name'];
    
    public function posts()
    {
        return $this->belongsToMany(Post::class);
    }

    public function post_tags(){
    	return $this->hasMany(PostTags::class);
    } 
}
