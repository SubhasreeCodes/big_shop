<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\City;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Database\Eloquent\ModelNotFoundException;


class HomeController extends Controller
{
    public function index(Request $request)
    {       
        $categories=Category::all();

        $cities = City::all();

        $data=[
            'categories'=>$categories,
            'cities'=>$cities
        ];

        return view('frontend/home',$data);        
    }
}
