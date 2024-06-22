<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Area;
use App\Models\Country;
use App\Models\Tag;
use App\Models\Spot;

class PostController extends Controller
{
    public function index(Area $area, Country $country, Tag $tag)
    {
    return view('spots.index')->with(['areas' => $area->getByLimit()])
    ->with(['tags' => $tag->getPaginateByLimit()]);
    }
    
    public function show(Spot $spot)
    {
    return view('spots.show')->with(['spots' => $spot->getByLimit()]);
    }
    
    public function detail(Spot $spot)
    {
    return view('spots.detail')->with(['spot' => $spot]);
    }
}
