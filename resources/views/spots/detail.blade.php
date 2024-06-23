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
            <h2 class="name">
                {{$spot->name}}
            </h2>
            <div class="content">
                <div class="content__spot">
                    <h3 class="body">{{$spot->body}}</h3>
                    <h3 class="country">{{$spot->country->name}}</h3>
                    <h3 class="address">{{$spot->address}}</h3>
                    <h3 class="country">{{$spot->user->name}}</h3>
                </div>
            </div>
            <div class="edit">
                <a href="/spots/{{ $spot->id }}/edit">Edit</a>
            </div>
            <div class="footer">
            <a href="/">Top page</a>
            </div>
    </body>
</html>
