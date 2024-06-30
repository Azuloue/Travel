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

            <div class="name">
            <p><label>Spot name<br>
                <input type="text" name="post[name]" placeholder="Spot name" value="{{old('post.name')}}"/>
            </label></p>
            </div>
            <p class="name__error" style="color:red">{{ $errors->first('post.name') }}</p>
            
            <div class="body">
                <p><label>Description<br>
                <textarea name="post[body]" placeholder="Description">{{old('post.body')}}</textarea>
                </label></p>
            </div>
            <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            
            <div class="address">
                <p><label>Address<br>
                <textarea name="post[address]" placeholder="Address">{{old('post.address')}}</textarea>
                </label></p>
            </div>
             <p class="address__error" style="color:red">{{ $errors->first('post.address') }}</p>
        
            <div class="country">
            <p><label>Country<br>
            <select name="post[country_id]">
                @foreach($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
            </p></label>
            <p class="country__error" style="color:red">{{ $errors->first('post.country_id') }}</p>
 
            <div class="tag">
                <p><label>Tag<br>
                    @foreach($tags as $tag)
                        <label>
                            {{-- valueを'$tagのid'に、nameを'配列名[]'に --}}
                            <input type="checkbox" value="{{ $tag->id }}" name="tags_array[]">
                                {{$tag->name}}
                            </input>
                        </label>
                    @endforeach    
                </p></label>
            <p class="tag__error" style="color:red">{{ $errors->first('tags_array') }}</p>
            <!--画像-->
            <div>
                <p><label>Image<br>
                <input type="file" name="image">
                </label></p>
            </div>
            <h4>
                post as {{Auth::user()->name}}
                <input type="hidden" name="post[user_id]" readonly value="{{ Auth::user()->id }}"/>
            </h4>
            <div>
            <br>
            <input type="submit" value="post"/>
        </form>
        <br>
        <div class="footer">
            <a href="/">Top page</a>
        </div>
    </x-app-layout>
    </body>
</html>

