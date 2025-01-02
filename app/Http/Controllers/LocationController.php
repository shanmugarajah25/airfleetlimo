<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LocationController extends Controller
{
    public function fareCalculation(Request $request){
        $request->validate([
            'start'=> 'required|string',
            'end' => 'required|string',
            'vehicle'=> 'required|string',
        ]);

        $start = $request->input('start');
        $end  = $request->input('end');
        $vehicle = $request->input('vehicle');

        $apiKey = config('services.google_map.key');
        $apiUrl = "https://maps.googleapis.com/maps/api/distancematrix/json";

        $response = Http::get($apiUrl,[
            'origins'=>$start,
            'destination'=>$end,
            'key' => $apiKey,
        ]);

        if($response->successful()){
            $data = $response->json();

            if($data['status']==='OK'){
                $distance = $data['rows'][0]['elements'][0]['distance']['value'] / 1000; //in km
                $rate = $distance * 20;
                $suvRate = $distance *3 ;

                return response()->json([
                    'rate'=>$rate,
                    'suvRate'=>$suvRate,
                ]);
            }

            return response()->json([
                'message' => 'Error with the Distance Matrix API',
            ]);
        }

        return response()->json([
            'message'=> 'Failed to fetch distance data',
        ]);

    }

}
