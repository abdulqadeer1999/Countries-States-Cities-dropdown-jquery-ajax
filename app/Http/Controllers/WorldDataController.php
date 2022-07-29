<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;
use App\Models\City;
use App\Models\State;

class WorldDataController extends Controller
{
   public function countries(){
    $countries = Country::get();
    return view('dropdown',compact('countries'));
   }


public function state(Request $request)
    {
        $statelocation = State::where('country_id', $request->id)->get();
        if (count($statelocation) > 0) {
            return response()->json([
                'status' => 200,
                'states' => $statelocation
            ]);
        } else {
            return response()->json([
                'status' => 404,
            ]);
        }
    }

    public function city(Request $request)
    {
        $statelocation = City::where('state_id', $request->id)->get();
        if (count($statelocation) > 0) {
            return response()->json([
                'status' => 200,
                'cities' => $statelocation
            ]);
        } else {
            return response()->json([
                'status' => 404,
            ]);
        }
    }

}
