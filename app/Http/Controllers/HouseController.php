<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\House;

class HouseController extends Controller
{
    public function index()
    {
        $houses = House::paginate(6);

        return view('house', compact('houses'));
    }
}
