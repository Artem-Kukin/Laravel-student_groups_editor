<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Студенты</title>
</head>

<body>
<a href="{{route('group.show', $group->id)}}">Вернуться назад</a>

    <ul>
        @foreach($students as $student)
        @if($student->group_id == $group->id)
        <li>
            <a href="{{route('student.show', [$group->id, $student->id])}}">{{$student->surname}} {{$student->name}}</a>
        </li>
        @endif
        @endforeach
    </ul>

</body>

</html>