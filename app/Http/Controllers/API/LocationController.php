<?php

namespace App\Http\Controllers\API;

use App\Location;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Validator;


class LocationController extends BaseController
{
    /**
     * @SWG\Get(
     *   path="/api/location",
     *   summary="List all pharmacy locations",
     *   operationId="getAllPharmacies",
     *
     *   @SWG\Response(response=200, description="Locations retrieved successfully."),
     *   @SWG\Response(response=406, description="Location not found."),
     *   @SWG\Response(response=500, description="internal server error")
     *)
     *
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        //
        $locations = Location::all();

        return $this->sendResponse($locations->toArray(), 'Locations retrieved successfully.');
    }

    /**
     * @SWG\Get(
     *   path="/api/location/{ID}",
     *   summary="List one pharmacy locations",
     *   operationId="getPharmacyById",
     *   @SWG\Parameter(
     *     name="Id",
     *     in="path",
     *     description="Specific Pharmacy.",
     *     required=true,
     *     type="integer"
     *   ),
     *   @SWG\Response(response=200, description="Locations retrieved successfully."),
     *   @SWG\Response(response=406, description="Location not found."),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     *
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function show($id)
    {
        $location = Location::find($id);


        if (is_null($location)) {
            return $this->sendError('Location not found.');
        }

        return $this->sendResponse($location->toArray(), 'Locations retrieved successfully.');
    }


    /**
     * @SWG\Get(
     *   path="/api/locationnearest",
     *   summary="List all pharmacy locations",
     *   operationId="getPharmacyById",
     *   @SWG\Parameter(
     *     name="lat",
     *     in="query",
     *     description="Latitude of Pharmacy.",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Parameter(
     *     name="long",
     *     in="query",
     *     description="Longitude of Pharmacy.",
     *     required=true,
     *     type="string"
     *   ),
     *   @SWG\Response(response=200, description="Locations retrieved successfully."),
     *   @SWG\Response(response=406, description="Location not found."),
     *   @SWG\Response(response=500, description="internal server error")
     * )
     *
     * @param Request $request
     * @return \Illuminate\Http\Response
     */
    public function showNearest(Request $request)
    {

        if ($request->has('lat') && $request->has('long')) {
            //
            $lat = $request->lat;
            $long = $request->long;

            $location = Location::nearestLocation($lat, $long);

        }else {
            $location = Location::all();
        }

        if (is_null($location)) {
            return $this->sendError('Location not found.');
        }

        return $this->sendResponse($location, 'Location retrieved successfully.');
    }

}
