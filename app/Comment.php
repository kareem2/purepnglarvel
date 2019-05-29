<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $table = 'post_comments';

	protected $dates = [
	    'created_at',
	    'updated_at',
	    'comment_date',
	];    

    protected $fillable = ['username', 'comment', 'comment_date'];
    
    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
