<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Просмотр группы</title>
</head>

<body>

    <p>{{$group->title}}</p>
    @if($group->is_active == true)
    <p>Группа начала свое обучение: {{$group->start_from}}</p>
    @else
    <p>Группа начнет свое обучение: {{$group->start_from}}</p>
    @endif
    <ul>
        <li><a href="{{route('group.edit', $group->id)}}">Внести изменение</a></li>

        <li>
            <form action="{{route('group.delete', $group->id)}}" method="post">
                @csrf
                @method('delete')
                <input type="submit" value="DELETE">
            </form>
        </li>


        <li><a href="{{route('students.index', $group->id)}}">Посмотреть студентов этой группы</a></li>
        <li><a href="{{route('student.create', $group->id)}}">Добавить студента</a></li>
        <li><a href="{{route('groups.index')}}">Перейти к списку всех групп</a></li>
    </ul>

</body>

</html>