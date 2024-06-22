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
        <h2 class='edit'>Edit my post</h2>
            <form action="/spots/{{ $spot->id }}" method="POST">
            @csrf
            @method('PUT')
                <div class="name">
                    <input type="text" name="post[name]" value="{{$spot->name}}">
                </div>
                <p class="name__error" style="color:red">{{ $errors->first('post.name') }}</p>
                <br>
                
                <div class="body">
                    <!--textareaタグはvalue属性に対応していないため、タグで挟み込む必要がある-->
                    <textarea name="post[body]">{{$spot->body}}</textarea>
                </div>
                <!--エラー用-->
                <p class="body__error" style="color:red">{{ $errors->first('post.body') }}</p>
                <br>
                
                <div class="address">
                    <textarea name="post[address]" >{{$spot->address}}</textarea>
                </div>
                <!--エラー用-->
                <p class="address__error" style="color:red">{{ $errors->first('post.address') }}</p>
                <br>
                
                <div class="country">
                <select name="post[country_id]">
                    @foreach($countries as $country)
                    <!--送信したいのは国名のidなので、valueの中身はidにしている-->
                    <option value="{{ $country->id }}" >
                        {{ $country->name }}
                    </option>
                    @endforeach
                </select>
                <!--エラー用-->
                <p class="country__error" style="color:red">{{ $errors->first('post.country_id') }}</p>
                
                <input type="submit" value="Update">
            </form>
            
        <div class="footer">
        <a href="/">Top page</a>
        </div>
    </body>
</html>

