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
        <h2 class='spots'>スポット一覧</h2>
                    @foreach ($spots as $spot)
                        <h5 class='name'>
                            <a href="/spots/{{$spot->id}}"}}>{{$spot->name}}</a>
                        </h5>
                        <h5 class='country'>{{$spot->country->name}}</h5>
                        <h5>more</h5>
                    @endforeach
    </body>
</html>

