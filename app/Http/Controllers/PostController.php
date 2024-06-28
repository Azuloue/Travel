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
    public function index(Area $area, Country $country, Tag $tag,Spot $spot)
    {
    return view('spots.index')->with(['areas' => $area->getByLimit()])
    ->with(['tags' => $tag->getPaginateByLimit()])
    ->with(['countries' => $country->getPaginateByLimit()]);
    }
    
    public function show(Spot $spot)
    {
    return view('spots.show')->with(['spots' => $spot->getByLimit()]);
    }
    
    public function detail(Spot $spot)
    {
    return view('spots.detail')->with(['spot' => $spot]);
    }
    
    public function create(Country $country, User $user, Spot $spot, Tag $tag)
    {
        return view('spots.create')
        ->with(['spot' => $spot])
        ->with(['countries' => $country->get()])
        ->with(['users' => $user->get()])
        ->with(['tags' => $tag->get()]);
    }
    
    public function store(PostRequest $request, Spot $spot)
    {
        $input_spot = $request['post'];
        $input_tags = $request->tags_array; //tags_arrayはnameで設定した配列名
        
        //先にpostsテーブルにデータを保存
        $spot->fill($input_spot)->save();
        
        //attachメソッドを使って中間テーブルにデータを保存
        $spot->tags()->attach($input_tags); 
        
        return redirect('/spots/'.$spot->id);
    }
    
    public function edit(Spot $spot, Country $country, Tag $tag)
    {  
        return view('spots.edit')->with(['spot' => $spot])
        ->with(['country' => $spot->country])
        ->with(['countries' => $country->get()])
        ->with(['tags' => $tag->get()])
        ->with(['tag' => $spot->tag]);
    }
    
    public function update(PostRequest $request, Spot $spot)
    {  
        $input_post = $request['post'];
        $input_tags = $request->tags_array; //tags_arrayはnameで設定した配列名
        
        $spot->fill($input_post)->save();
        
    //attachメソッドを使って中間テーブルにデータを保存
        $spot->tags()->sync($input_tags); 
        
        return redirect ('/spots/' . $spot->id);
        
    }
    public function delete(Spot $spot)
    {
        $spot->delete();
        return redirect('/');
    }
    

}
