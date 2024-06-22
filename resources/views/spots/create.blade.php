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
        <h2 class='spots'>Post a spot</h2>
            <form action="/spots" method="POST">
            @csrf
            <div class="name">
                <input type="text" name="post[name]" placeholder="Enter spot name"/>
            </div>
            <br>
            <div class="body">
                <textarea name="post[body]" placeholder="Add description"></textarea>
            </div>
            <input type="submit" value="post"/>
        </form>
        <br>
        <div class="footer">
            <a href="/">Top page</a>
        </div>
    </body>
</html>

