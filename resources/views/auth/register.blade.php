<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Регистрация</title>
    <link rel="stylesheet" href="{{asset('css/auth.css')}}">
</head>
<body>
<h1 class="title">Регистрация</h1>
    <form action="{{ route('register') }}" method="POST" class="auth_form">
        @csrf
        <label for="name">Имя пользователя</label>
        <input type="text" name="name" id="name" class="auth_input" required value="{{old('name')}}">
        <label for="email">Почта</label>
        <input type="text" name="email" id="email" class="auth_input" required value="{{old('email')}}">
        <label for="password">Пароль</label>
        <input type="text" name="password" id="password" class="auth_input" required>
        <label for="password_confirmation">Подтверждение пароля</label>
        <input type="text" name="password_confirmation" id="password_confirmation" class="auth_input" required>
        <button type="submit" class="button">Зарегестрироваться</button>
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
