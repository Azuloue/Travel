<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Landmarker</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <x-slot name="header">
        Edit
        </x-slot>
    <body>
        <h1>Landmarker</h1>
        <h2 class='edit'>Edit my post...</h2>
            <form action="/spots/{{ $spot->id }}" method="POST">
            @csrf
            @method('PUT')
                <div class="name">
                    <p><label>Spot name<br>
                    <input type="text" name="post[name]" value="{{$spot->name}}">
                    </label></p>
                </div>
                <p class="name__error" style="color:red">{{ $errors->first('post.name') }}</p>
                
                <div class="body">
                    <!--textareaタグはvalue属性に対応していないため、タグで挟み込む必要がある-->
                    <p><label>Description<br>
                    <textarea name="post[body]">{{$spot->body}}</textarea>
                    </label></p>
                    </div>
                <!--エラー用-->
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
                
                <div class="address">
                    <p><label>Adress<br>
                    <textarea name="post[address]" >{{$spot->address}}</textarea>
                    </label></p>
                </div>
                <!--エラー用-->
                <p class="address__error" style="color:red">{{ $errors->first('post.address') }}</p>
                
                <div class="country">
                    <p><label>Country<br>
                    <select name="post[country_id]">
                        @foreach($countries as $country)
                        <!--送信したいのは国名のidなので、valueの中身はidにしている-->
                        <option value="{{ $country->id }}" @selected(old('country', $spot->country->name) == $country->name)>
                            {{ $country->name }}
                        </option>
                        @endforeach
                    </select>
                    </p></label>
                <!--エラー用-->
                <p class="country__error" style="color:red">{{ $errors->first('post.country_id') }}</p>
                
                <div class="tag">
                    <p><label>Tag<br>
                    @foreach($tags as $tag)
                        <label>
                            {{-- valueを'$tagのid'に、nameを'配列名[]'に --}}
                            <input type="checkbox" value="{{ $tag->id }}" name="tags_array[]"
                            {{  $spot->tags->contains($tag->id) ? 'checked="checked"' : '' }}>
                            {{$tag->name}}
                            </input>
                        </label>
                    @endforeach    
                    </p></label>
                    <p class="tag__error" style="color:red">{{ $errors->first('tags_array') }}</p>        

                <input type="submit" value="Update">
            </form>
            
        <div class="footer">
        <a href="/">Top page</a>
        </div>
    </body>
    </x-app-layout>
</html>

