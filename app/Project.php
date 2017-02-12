<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    
    public function head()
   	{
   		return $this->belongsTo('App\Student', 'ph_id', 'id');
   	}

}
