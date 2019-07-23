<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Pwlist extends Model
{
      public function worshipper()
	{
		return $this->belongsTo('App\User','userId');
	}

	 public function worshippers()
    {
        return $this->belongsToMany(User::class);
    }

    public function rehearsals()
    {
        return $this->belongsToMany(Pwlist::class);
    }
}
