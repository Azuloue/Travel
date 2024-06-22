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
                <input type="text" name="post[name]" placeholder="Spot name"/>
            </div>
            <br>
            <div class="body">
                <textarea name="post[body]" placeholder="Description"></textarea>
            </div>
            <br>
            <div class="address">
                <textarea name="post[address]" placeholder="Address"></textarea>
            </div>
            <br>
            <div class="country">
            <select name="post[country_id]">
                @foreach($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
            <br>
            <select name="post[user_id]">
                @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            <div>
            <br>
            <input type="submit" value="post"/>
        </form>
        <br>
        <div class="footer">
            <a href="/">Top page</a>
        </div>
    </body>
</html>

