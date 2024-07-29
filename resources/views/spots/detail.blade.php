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
        <div class="mx-4 my-4">
            <div class="pr-60">
            <p class="border-b-2 border-zinc-200 font-bold text-xl">
                {{$spot->name}}
            </p>
            </div>
                <p class="my-4">{{$spot->body}}</p>
                <div class="flex items-center my-4">
                    <p class="text-zinc-300 text-xs mr-4">Country</p>
                    <p>{{$spot->country->name}}</p>
                </div>
                <div class="flex items-center my-4">
                    <p class="text-zinc-300 text-xs mr-4">Address</p>
                    <p>{{$spot->address}}<p>
                </div>
                <div class="flex items-center my-4">
                    <p class="text-zinc-300 text-xs mr-2">Category</p>
                        @foreach($spot->tags as $tag)
                    <p class="mr-2">{{$tag->name}}</p>
                        @endforeach
                </div>
                <div class="flex items-center my-4">
                    <p class="text-zinc-300 text-xs mr-2">Posted by</p>
                    {{$spot->user->name}}
                </div>
                
                <p class="image"><img src="{{$spot->image_path}}" width="30%" height="30%"></p>
                
                <!--自分の投稿のみ編集ボタンを表示する        -->
                @if (Auth::id() == $spot->user_id)
                <a class="text-xs rounded bg-teal-500 text-white px-1 py-0.5" href="/spots/{{ $spot->id }}/edit">Edit</a>
                @endif
            </div>
            
            <div class="ml-4 mt-8">
                <p><a class="text-xs rounded bg-zinc-400 text-white px-1 py-0.5" href="/spots/">Back</a></p>
                <p><a class="text-xs rounded bg-zinc-400 text-white px-1 py-0.5" href="/">Top page</a></p>
            </div>

    </body>
    </x-app-layout>
</html>

