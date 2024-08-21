<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CityController extends Controller
{
    public function showCityDetails($cityName)
    {
        $city = City::where('name',$cityName)->with('state.country')->with('state.country')->first();

        if ($city) {
            $state = $city->state;
            $country = $state->country;

            return view('city-details',compact('city','state','country'));
        } else {
            return view('city-not-found');
        }
    }
}
