<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model 
{
    //

    protected $table = 'posts';

    protected $fillable = ['views_count', 'downloads_count'];

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    public function comments(){
        return $this->hasMany(Comment::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function category(){
    	return $this->belongsTo(Category::class);
    }

    public function color_palettes(){
        return $this->hasMany(ColorPalette::class);
    }

    public function relatedPhotos($limit = null){
        $related_photos = Post::whereHas('tags', function ($query) {
            $tagIds = $this->tags()->pluck('tags.id')->all();
            $query->whereIn('tags.id', $tagIds);
        })->with('user')->where('id', '<>', $this->id);

        if(!is_null($limit)){
            $related_photos->limit($limit);
        }

        return $related_photos->get();
    }
}
