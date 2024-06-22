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
                <input type="text" name="post[name]" placeholder="Spot name" value="{{old('post.name')}}"/>
            </div>
            <p class="name__error" style="color:red">{{ $errors->first('post.name') }}</p>
            
            <br>
            <div class="body">
                <textarea name="post[body]" placeholder="Description">{{old('post.body')}}</textarea>
            </div>
            <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
            
            <br>
            <div class="address">
                <textarea name="post[address]" placeholder="Address">{{old('post.address')}}</textarea>
            </div>
             <p class="address__error" style="color:red">{{ $errors->first('post.address') }}</p>
            
            <br>
            <div class="country">
            <select name="post[country_id]">
                {{ old('post.country_id') }}
                <!--国名が記憶されない。spot->country->nameのような書き方にできないか？-->
                @foreach($countries as $country)
                <option value="{{ $country->id }}">{{ $country->name }}</option>
                @endforeach
            </select>
            <p class="country__error" style="color:red">{{ $errors->first('post.country_id') }}</p>
            <br>
            
            <select name="post[user_id]">
                {{ old('post.user_id') }}
                @foreach($users as $user)
                <option value="{{ $user->id }}">{{ $user->name }}</option>
                @endforeach
            </select>
            <p class="user__error" style="color:red">{{ $errors->first('post.user_id') }}</p>
            
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

