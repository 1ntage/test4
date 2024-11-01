<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <title>Заявленные участники</title>
</head>
<body>
        <table class="participants_table">
            <thead>
                <th class="thead">Кличка</th>
                <th class="thead">Возраст</th>
                <th class="thead">Порода</th>
                <th class="thead">Окрас</th>
                <th class="thead">Хозяин</th>
                <th class="thead">Статус</th>
            </thead>
            @foreach($participants as $participant)
            <tbody>
                <td>{{$participant->nickname}}</td>
                <td>{{$participant->age}}</td>
                <td>{{$participant->breed}}</td>
                <td>{{$participant->color}}</td>
                <td>{{$participant->owner}}</td>
                <td>{{$participant->status}}</td>
                <td><button>Одобрить</button></td>
            </tbody>
            @endforeach
        </table>

</body>
</html>
