<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Tag;


class TagController extends Controller
{
    public function show(Tag $tag)
    {
        
    return view('tags.show',['tagname'=>$tag->name])->with(['spots' => $tag->getByTag()]);
    
    }
        
}
