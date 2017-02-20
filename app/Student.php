<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    
    //
    public function books()
    {
    	return $this->hasMany('App\Book', 'owner_id');
    }

    public function projects()
    {
    	return $this->hasMany('App\Project', 'ph_id');
    }

    protected static function boot()
    {
    	parent::boot();

    	static::deleting(function($student) {
    		$student->projects()->delete();
    		$student->books()->delete();
    	});
    }

}
