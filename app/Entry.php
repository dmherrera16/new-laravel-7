<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Entry extends Model
{
	// Entry N - 1 User
	// Eager loading
    public function user(){
    	return $this->belongsTo(User::class);
    }

    //Mutator
    public function setTitleAttribute($value){
    	$this->attributes["title"] = $value;
    	$this->attributes["slug"] = Str::slug($value);
    }

    //Para cambiar el id con el que encuentra las clases 
    // public function getRouteKeyName(){
    // 	return 'slug';
    // }

    public function getUrl(){
    	return route('show_entry', ['entry' => $this->slug.'-'.$this->id]);
    }
}
