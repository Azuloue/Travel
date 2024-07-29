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
        <ul>
        @foreach ($spots as $spot)
        <li>
            <div class="pr-60">
            <p class="border-b-2 border-zinc-200 font-bold">
                <a href="/spots/{{$spot->id}}"}}>{{$spot->name}}</a>
            </p>
            </div>
            <ul>
            <li class="mb-2">
                <div class="flex items-center">
                    <p class="text-zinc-300 text-xs mr-4">Country</p>
                    <a href="/countries/{{$spot->country->id}}"}}>{{$spot->country->name}}</a>
                </div>
            <!--スポットに関連するタグの数だけ繰り返す-->
                <div class="flex items-center">
                    <p class="text-zinc-300 text-xs mr-2">Category</p>
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
        
            <script>
                function deletePost(id) {
                'use strict'
                if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
                document.getElementById(`form_${id}`).submit();
                }
                }
            </script>
            </li>
            </ul>
        </li>
        </ul>
        </div>
    </body>
    </x-app-layout>
</html>

