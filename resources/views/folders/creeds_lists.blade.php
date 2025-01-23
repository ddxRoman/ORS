@vite(['resources/js/app.js','resources/css/main.css'])
@vite(['resources/css/button.css'])
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Проект</th>
            <th>Логин</th>
            <th>Пароль</th>
        </tr>
    </thead>
    <tbody>
@foreach($creeds_lists as $creeds)
        <tr>
            <th><a href="{{$creeds->URL}}" class="link-dark" target="_blank">{{$creeds->name }}</a> </th>
            <th>{{$creeds->Login}}</th>
            <th>{{$creeds->Password}}</th>
        </tr>
@endforeach
    </tbody>
</table>
</body>
</html>
