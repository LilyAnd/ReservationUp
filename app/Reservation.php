<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function customers()
    {
    	return $this->hasOne('App\Customer');
    }

    public function merchants()
    {
    	return $this->hasOne('App\Merchant');
    }

    public function items()
    {
    	return $this->belongsToMany('App\Item','reservations_items');
	}
}
