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
            Detail
        </x-slot>
    <body>
        <h1>Landmarker</h1>
            <h2 class="name">
                {{$spot->name}}
            </h2>
            <div class="content">
                <div class="content__spot">
                    <h3 class="body">{{$spot->body}}</h3>
                    <h3 class="country">{{$spot->country->name}}</h3>
                    <h3 class="address">{{$spot->address}}</h3>
                    <h3 class="tag">
                        @foreach($spot->tags as $tag)
                        {{$tag->name}}
                        @endforeach
                    </h3>
                    <h3 class="user">posted by {{$spot->user->name}}</h3>
                    <h3 class="image"><img src="{{$spot->image_path}}"></h3>
                  
                </div>
            </div>
            <div class="edit">
                <a href="/spots/{{ $spot->id }}/edit">Edit</a>
            </div>
            
            
            <div class="footer">
            <p><a href="/spots/">Back</a></p>
            <p><a href="/">Top page</a></p>
            </div>
    </body>
    </x-app-layout>
</html>

