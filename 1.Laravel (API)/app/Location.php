<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Booking;
use App\Property;

class Location extends Model
{
    //
    //A location can have MANY bookings
    protected function booking(){
        return $this->hasMany(Bookings::class);
    }

    //A location can have MANY properties
    protected function property(){
        return $this->hasMany(Property::class);
    }
}
