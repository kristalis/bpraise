<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Rehearsal extends Model
{
     public function playlist()
    {
        return $this->belongsToMany(Pwlist::class);
    }
}
