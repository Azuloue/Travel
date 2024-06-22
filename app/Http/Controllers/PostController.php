<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use App\Models\Area;
use App\Models\Country;
use App\Models\Tag;
use App\Models\Spot;
use App\Models\User;

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
    
    public function create(Country $country, User $user, Spot $spot)
    {
        return view('spots.create')
        ->with(['spot' => $spot])
        ->with(['countries' => $country->get()])
        ->with(['users' => $user->get()]);
    }
    
    public function store(PostRequest $request, Spot $spot)
    {
        $input =$request['post'];
        $spot->fill($input)->save();
        return redirect('/spots/'.$spot->id);
    }
    
    public function edit(Spot $spot, Country $country)
    {  return view('spots.edit',)->with(['spot' => $spot])
        ->with(['countries' => $country->get()]);
    }
    
    public function update(PostRequest $request, Spot $spot)
    {   $input_post = $request['post'];
        $spot->fill($input_post)->save();
        return redirect ('/spots/' . $spot->id);
        
    }
    public function delete(Post $post)
    {
        $post->delete();
        return redirect('/');
    }

}
