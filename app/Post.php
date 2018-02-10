<?php

namespace pami;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
<<<<<<< HEAD
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
=======
    protected $fillable = ['user_id', 'category_id', 'name', 'slug', 'excerpt', 'body', 'status', 'file'];

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function category(){
    	return $this->belongsTo(Category::class);
    }
    
    public function tags(){
>>>>>>> Project-CRUD
    	return $this->belongsToMany(Tag::class);
    }
}
