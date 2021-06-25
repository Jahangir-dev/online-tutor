<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class SentOffer extends Model
{
    protected $table = 'offer';

public function gig_details()
    {
    	return $this->hasOne('App\Models\Teacher_Gigs','id','offer_id');
    }

public function from_user_d()
    {
    	return $this->hasOne('App\User','id','from_user');
    }

public function to_user_d()
    {
    	return $this->hasOne('App\User','id','to_user');
    }


}
