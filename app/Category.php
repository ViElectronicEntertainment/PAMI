<?php

namespace pami;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
<<<<<<< HEAD
	protected $fillable = [
		'name','slug','body'
	];

    public function posts (){
=======
    protected $fillable = [
    	'name', 'slug', 'body'
    ];

    public function posts(){
>>>>>>> Project-CRUD
    	return $this->hasMany(Post::class);
    }
}
