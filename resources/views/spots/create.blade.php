<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <title>Landmarker</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
<x-app-layout>
</head>
<body>
    <form action="/spots" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="ml-4 my-4">
        <div class="mb-4">
        <p><label for="spotname">Spot name</label></p>
            <input class="placeholder-zinc-200 rounded bg-white-400 w-1/2" placeholder="up to 30 characters" type="text" id="spotname" name="post[name]" value="{{old('post.name')}}"/>
        
        <p class="text-amber-600">{{ $errors->first('post.name') }}</p>
        </div>
        
        <div class="mb-4">
            <p><label for="description">Description</label></p>
            <textarea class="placeholder-zinc-200 rounded bg-white-400 w-1/2" name="post[body]" placeholder="up to 400 characters" id="description">{{old('post.body')}}</textarea>
            
        <p class="text-amber-600">{{ $errors->first('post.body') }}</p>
        </div>
        
        <div class="mb-4">
            <p><label for="address">Address</label></p>
            <textarea class="placeholder-zinc-200 rounded bg-white-400 w-1/2" name="post[address]" placeholder="up to 200 characters" id="address">
                    {{old('post.address')}}
             </textarea>
        </div>
             <p class="text-amber-600">{{ $errors->first('post.address') }}</p>
        
        <div class="mb-4">
            <p><label for="country">Country</label></p>
            <select name="post[country_id]" class="rounded bg-white-400" id="country">
                <option value="" selected disabled class="text-zinc-200">Select a country</option>
                @foreach($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
            </p></label>
            <p class="text-amber-600">{{ $errors->first('post.country_id') }}</p>
            </div>
            
            <div class="mb-4">
                <p><label for="tag">Tag</label></p>
                    @foreach($tags as $tag)
                        <!--valueを'$tagのid'に、nameを'配列名[]'に-->
                    <input type="checkbox" value="{{ $tag->id }}" name="tags_array[]" id="tag" class="ml-2">
                        {{$tag->name}}
                    </input>
                    @endforeach
            <p class="text-amber-600">{{ $errors->first('tags_array') }}</p>
            </div>
            
            <!--画像-->
            <div class="mb-4">
                <p><label for="image">Image</label></p>
                <input type="file" name="image" id="image">
            </div>
            
            <div class="flex">Post as
                <p class="text-amber-600"> &nbsp;{{Auth::user()->name}}</p>
                <input type="hidden" name="post[user_id]" readonly value="{{ Auth::user()->id }}"/>
            </div>
            
            
            <input type="submit" value="post" class="overflow-hidden rounded bg-teal-500 px-5 py-1 text-white transition-all duration-300 hover:bg-teal-500 hover:ring-2 hover:ring-teal-500 hover:ring-offset-20.5"/>
        </form>
        <br>
    </div>

    <div  class="ml-4 mt-8">
    <p><a class="text-xs rounded bg-zinc-400 text-white px-1 py-0.5" href="/">Top page</a></p>
    </div>
    
    </x-app-layout>
    </body>
</html>

