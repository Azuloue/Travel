<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Landmarker</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
   
    </head>
    <body>
        <h1>Landmarker</h1>
        <h2 class='spots'>
            国別投稿一覧
        </h2>
            @foreach ($spots as $spot)
                <h5 class='name'>
                    <a href="/spots/{{$spot->id}}"}}>{{$spot->name}}</a>
                </h5>
                
                    <h5 class='country'>{{$spot->country->name}}</h5>
            
                        
                        <h5 class='tags'>
                        {{-- スポットに関連するタグの数だけ繰り返す --}}
                        @foreach($spot->tags as $tag)   
                            <a href="/tags/{{$tag->id}}">{{ $tag->name }}</a>
                        @endforeach
                        </h5>

                        <form action="/spots/{{ $spot->id }}" id="form_{{ $spot->id }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="button" onclick="deletePost({{ $spot->id }})">delete</button> 
                        </form>
            @endforeach
            </h5>
        
        <script>
            function deletePost(id) {
            'use strict'
            if (confirm('削除すると復元できません。\n本当に削除しますか？')) {
            document.getElementById(`form_${id}`).submit();
            }
            }
        </script>

            <div class="footer">
            <a href="/">Top page</a>
        </div>
    </body>
</html>

