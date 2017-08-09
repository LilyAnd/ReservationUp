<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Merchant extends Model
{
    protected $primaryKey='id_merchant';

	public $timestamps=false;
    
    public function items()
    {
    	return $this->belongsToMany('App\Item');
    }

    public function reservations()
    {
    	return $this->belongsToMany('App\Reservation');
    }
}
