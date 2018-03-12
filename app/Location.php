<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
class Location extends Model
{

    /**
     * @param $lat
     * @param $long
     * @return mixed
     *
     * @description model raw query to look for the closest pharmacy based on location.
     */
    public static function nearestLocation($lat, $long)
    {
        $lat = $lat;
        $long = $long;

        $data = DB::select( DB::raw(" SELECT pharmacy_name, address, city, state, postal_code, (3959  * acos(cos( radians(:lat) ) * cos( radians( latitude ) ) * cos( radians( longitude ) - radians(:long) ) + sin( radians(:lat2) ) * sin( radians( latitude ) ) ) ) 
                                      as distance_in_miles from locations
                                      ORDER BY distance_in_miles ASC LIMIT 5"),
                          array(
                              'lat'  => $lat,
                              'lat2' => $lat,
                              'long' => $long,
        ));

        return $data;
    }
}



