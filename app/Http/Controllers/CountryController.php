<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Country;

class CountryController extends Controller
{
    public function show(Country $country)
    {
    return view('countries.show')->with(['spots' => $country->getByCountry()]);
    }
}
