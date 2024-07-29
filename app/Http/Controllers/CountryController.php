<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Country;

class CountryController extends Controller
{
    public function show(Country $country)
    {
    return view('countries.show',['countryname'=>$country->name])
    ->with(['spots' => $country->getByCountry()]);
    }
}
