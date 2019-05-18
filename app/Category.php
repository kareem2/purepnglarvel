<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //

    protected $fillable = ['slug', 'name'];
	
	public function posts(){
		return $this->hasMany(Post::class);
	}

	public function samplePost(){
        $sample = Post::where('category_id', $this->id)->whereNotNull('main_image')->first();

        return $sample;		
	}

	public function postsCount(){
		return Post::where('category_id', $this->id)->count();
	}
}
