<?php

namespace pami;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
		'user_id','category_id','name','slug','excerpt','body','status','file'
	];

    public function user (){
    	return $this->belongsTo(User::tag);
    }

    public function category (){
    	return $this->belongsTo(Category::tag);
    }

    public function tags (){
    	return $this->belongsToMany(Tag::class);
    }
}
