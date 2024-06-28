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
            Top
        </x-slot>
    <body>
        <h1>Landmarker</h1>
                <a href="/create"><h2 class='spots'>Post a spot</h2></a>
                <a href="/spots"><h2 class='spots'>スポット一覧</h2></a>
                <h2 class='countries'>国で探す</h2>
                    @foreach ($areas as $area)
                        <h5 class='area'>{{$area->name}}</h5>
                    @endforeach
                    @foreach ($countries as $country)
                    <a href="/countries/{{$country->id}}">
                        <h5 class='country'>{{$country->name}}</h5>
                    </a>
                    @endforeach
                <h2 class='objective'>目的で探す</h2>
                    @foreach ($tags as $tag)
                         <a href="/tags/{{$tag->id}}"><h5 class='tag'>{{$tag->name}}</h5></a>
                    @endforeach

    </body>
    </x-app-layout>
</html>

