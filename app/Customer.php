<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $primaryKey='id_customer';
	
	public $timestamps=false;
    
    public function reservations()
    {
    	return $this->belongsToMany('App\Reservation');
    }
}
