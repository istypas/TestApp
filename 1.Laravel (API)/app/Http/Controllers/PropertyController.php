<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Property;
use App\Location;
use Response;
use DB;
use App\Http\Resources\Property as PropertyResource;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //Get Properties (add pagination for future use)
        //$properties = Property::get();
        //$locations = Location::get();

        $details = DB::table('properties')
            ->join('locations', 'properties._fk_location', '=', 'locations.__pk')
            ->join('bookings', 'properties.__pk', '=', 'bookings._fk_property')
            ->select('properties.property_name', 'properties.near_beach', 'properties.accepts_pets', 'properties.sleeps', 'properties.beds', 'locations.location_name', 'bookings.__pk', 'bookings.start_date', 'bookings.end_date', 'properties.img')
            ->get();
        //$merged = $properties->toBase()->merge($locations);
        //Return collection of bookings as a resource
        //return PropertyResource::collection($properties);
        //return response()->json( $details );
        return Response::json($details);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $property = Property::findOrFail($id);

        return new PropertyResource($property);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

}
