<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Landmarker</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
    <body>
        <div class="ml-4 my-4">
            
            <form action="/spots/{{ $spot->id }}" method="POST">
                @csrf
                @method('PUT')
                
            <div class="mb-4">
                <p><label for="spotname">Spot name</label></p>
                <input type="text" class="placeholder-zinc-200 rounded bg-white-400 w-1/2" name="post[name]" placeholder="up to 30 characters" value="{{$spot->name}}" id="spotname">
                <p class="text-amber-600">{{ $errors->first('post.name') }}</p>
            </div>
            <div class="mb-4">
                <!--textareaタグはvalue属性に対応していないため、タグで挟み込む必要がある-->
                <p><label for="description">Description</label></p>
                    <textarea name="post[body]" class="placeholder-zinc-200 rounded bg-white-400 w-1/2" placeholder="up to 400 characters" id="description">{{$spot->body}}</textarea>
                <!--エラー用-->
                <p class="text-amber-600">{{ $errors->first('post.body') }}</p>
             </div>
             
            <div class="mb-4">
                    <p><label for="address">Adress</label></p>
                    <textarea name="post[address]" class="placeholder-zinc-200 rounded bg-white-400 w-1/2" placeholder="up to 200 characters" id="address">{{$spot->address}}</textarea>
                <!--エラー用-->
                <p class="text-amber-600">{{ $errors->first('post.address') }}</p>
            </div>
            
            <div class="mb-4">
                    <p><label for="country">Country</label></p>
                    <select name="post[country_id]" class="rounded bg-white-400" id="country">
                        <option value="" selected disabled class="text-zinc-200">Select a country</option>
                        @foreach($countries as $country)
                        <!--送信したいのは国名のidなので、valueの中身はidにしている-->
                        <option value="{{ $country->id }}" @selected(old('country', $spot->country->name) == $country->name)>
                            {{ $country->name }}
                        </option>
                        @endforeach
                    </select>
                <!--エラー用-->
                <p class="text-amber-600">{{ $errors->first('post.country_id') }}</p>
            </div>
                
            <div class="mb-4">
                <p><label for="tag">Tag</label></p>
                    @foreach($tags as $tag)
                        <!--valueを'$tagのid'に、nameを'配列名[]'に-->
                        <input type="checkbox" value="{{ $tag->id }}" name="tags_array[]"
                        {{  $spot->tags->contains($tag->id) ? 'checked="checked"' : '' }} id="tag" class="ml-2">
                        {{$tag->name}}
                        </input>
                    @endforeach
                    <p class="text-amber-600">{{ $errors->first('tags_array') }}</p>      
            </div>
            
            <div class="mb-4">
                <p><label for="image">Image</label></p>
                <input type="file" name="image" id="image" value="{{$spot->image_path}}">
            </div>
            
           <div class="flex mb-2">Post as
                <p class="text-amber-600"> &nbsp;{{Auth::user()->name}}</p>
                <input type="hidden" name="post[user_id]" readonly value="{{ Auth::user()->id }}"/>
            </div>

                
            <input type="submit" value="Update" class="overflow-hidden rounded bg-teal-500 px-5 py-1  my-2 text-white transition-all duration-300 hover:bg-teal-500 hover:ring-2 hover:ring-teal-500 hover:ring-offset-20.5">
            </form>
        </div>
        
    <div  class="ml-4 mt-8">
    <p><a class="text-xs rounded bg-zinc-400 text-white px-1 py-0.5" href="/">Top page</a></p>
    </div>

    </body>
    </x-app-layout>
</html>

