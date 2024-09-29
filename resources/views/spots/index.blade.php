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
        <div class="my-4 ml-4 flex justify-between">
            <div class="flex-col">
            <h2 class="text-4xl">Welcome.</h2>
            <h2 class="mb-2">You could search sightseeing spots on Landmarker.<br>Click each country or category.</h2>
            </div>
        <span class="relative">
        <button class="h-12 overflow-hidden rounded bg-zinc-400 px-5 py-2.5 text-white transition-all duration-300 hover:bg-zinc-500 hover:ring-2 hover:ring-zinc-500 hover:ring-offset-2 mr-10">
        <a href="/spots"><p >View all the spots</p></a>
        </button>
        </span>
        </div>
        
        <div class="my-4 ml-4 mr-10">

            <h2 class="border-b-2 border-zinc-200">Search by country</h2>
        </div>
        
        <div>
        <ul>
            @foreach ($areas as $area)
            <li class="indent-8">
                {{$area->name}}
            <ul>
                <li class="indent-16">
                    @foreach($area->countries as $country)
                    <a class="mr-4"href="/countries/{{$country->id}}">
                    {{$country->name}}
                    @endforeach
                    </a>
                </li>
            </ul>
            </li>
            @endforeach
        </ul>
        </div>
        
        <div class="my-4 ml-4 mr-10">
            <h2 class="border-b-2 border-zinc-200">Search by category</h2>
        </div>
                <ul>
                    <li class="indent-8">
                    @foreach ($tags as $tag)
                         <a href="/tags/{{$tag->id}}"><span class="mr-4">{{$tag->name}}</span></a>
                    @endforeach
                    </li>
                </ul>
            
    </body>
    </x-app-layout>
</html>

