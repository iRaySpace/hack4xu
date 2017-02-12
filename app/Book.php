<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    
    //
   	public function owner()
   	{
   		return $this->belongsTo('App\Student', 'id');
   	}

}
