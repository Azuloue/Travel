<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Landmarker</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    
    <body>
        <x-app-layout>
            <div class="my-4 ml-4 pr-60">
            <p class="border-b-2 border-zinc-200">
                Search by <span class="text-amber-600">{{ $tagname }}</span> 
            </p>
            </div>
            <div class="ml-4">
                <div>
                @foreach ($spots as $spot)
                <p class='font-bold'>
                    <a href="/spots/{{$spot->id}}"}}>{{$spot->name}}</a>
                </p>
                <div class="flex items-center">
                    <p class="text-zinc-300 text-xs mr-4">Country</p>
                    <a href="/countries/{{$spot->country->id}}"}}>{{$spot->country->name}}</a>
                </div>
                <div class='flex items-center mb-2'>
                    <p class="text-zinc-300 text-xs mr-2 ">Category</p>
                        <!-- スポットに関連するタグの数だけ繰り返す -->
                        @foreach($spot->tags as $tag)   
                    <p class="mr-2"><a href="/tags/{{$tag->id}}">{{ $tag->name }}</a></p>
                        @endforeach
                </div>
                    <!--自分の投稿のみ削除ボタンを表示する        -->
                    @if (Auth::id() == $spot->user_id)
                        <form action="/spots/{{ $spot->id }}" id="form_{{ $spot->id }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button class="mb-2 text-xs rounded bg-orange-500 text-white px-1 py-0.5" type="button" onclick="deletePost({{ $spot->id }})">delete</button> 
                        </form>
                    @endif      
                @endforeach
                </div>
            </div>
            <script>
                function deletePost(id) {
                'use strict'
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
                }
                }
            </script>
        </div>
        
        <div class="ml-2 mt-8">
            <a class="text-xs rounded bg-zinc-400 text-white px-1 py-0.5" href="/">Top page</a>
        </div>
        </x-app-layout>
    </body>
</html>

