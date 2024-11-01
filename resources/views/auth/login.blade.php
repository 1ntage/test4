<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/auth.css')}}">
    <title>Авторизация</title>
</head>
<body>
<form action="{{ route('login') }}" method="POST" class="auth_form">
    @csrf
    <h1>Авторизация</h1>
    <label for="email">Почта</label>
    <input type="text" name="email" id="email" required class="auth_input">
    <label for="password">Пароль</label>
    <input type="text" name="password" id="password" required class="auth_input">
    <button type="submit" class="button">Войти</button>
</form>

@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
</body>
</html>
