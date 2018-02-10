<?php

namespace pami;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
<<<<<<< HEAD
	protected $fillable = [
		'name','slug'
	];

    public function posts (){
=======
    protected $fillable = [
    	'name', 'slug'
    ];

    public function posts(){
>>>>>>> Project-CRUD
    	return $this->belongsToMany(Post::class);
    }
}
