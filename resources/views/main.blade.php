<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Выставка кошек</title>
</head>
<body>
    <p><a>Подтвержденные участники</a></p>
    <p><a href="{{ route('participants') }}">Заявленные участники</a></p>
    <p><a href="/register">Зарегистрироваться</a></p>
    <form class="participants_form" action="{{route('participants_store')}}" method="POST">
        @csrf
        <label for="nickname">Кличка</label>
        <input type="text" name="nickname" id="nickname">
        <label for="age">Возраст</label>
        <input type="number" name="age" id="age">
        <label for="breed">Порода</label>
        <input type="text" name="breed" id="breed">
        <label for="color">Окрас</label>
        <input type="text" name="color" id="color">
        <label for="owner">Хозяин</label>
        <input type="text" name="owner" id="owner">
        <button class="form_button" type="submit">Заявить участника</button>
    </form>
<form action="{{route('logout')}}" method="POST">
    @csrf
    <button type="submit">Выйти из аккаунта</button>
</form>

@if(session())
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif
</body>
</html>
