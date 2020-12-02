<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Booking;
use App\Location;

class Property extends Model
{
    //
    //A property can be featured in MANY bookings
    protected function booking(){
        return $this->hasMany(Booking::class);
    }

    //A property can be on ONLY one location
    protected function location(){
        return $this->hasOne(Location::class);
    }
}
