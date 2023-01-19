<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Flight;
class FlightController extends Controller
{
    static public function index(){
        return view('index');
    }

    public function getFlightList(){
        $a = Flight::with('captain')->get();
        return response()->json(['data'=>$a]);
    }
}
