<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Информация о студенте</title>
</head>

<body>
    <a href="{{route('students.index', $group->id)}}">Вернуться назад</a>

    <div>
        <h2>{{$group->title}}</h2>
        <h3>Информация о студенте</h3>

        <div>Фамилия: {{$student->surname}}</div>
        <div>Имя: {{$student->name}}</div>
    </div>
</body>

</html>