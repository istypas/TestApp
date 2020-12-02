<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Property;
use App\Location;

class Booking extends Model
{
    //
    //A booking can be featured in MANY bookings
    protected function property(){
        return $this->hasOne(Property::class);
    }

    //A booking can have ONLY one location
    protected function location(){
        return $this->hasOne(Location::class);
    }
}
