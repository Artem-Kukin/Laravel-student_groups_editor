<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить студента</title>
</head>

<body>
    <form action="{{route('student.store', $group->id)}}" method="post" /*target="_blank" * />
    @csrf
    <fieldset>
        <legend>Добавить студента в группу {{$group->title}}</legend>

        <label for="ID">ID группы:</label>
        <input type="text" name="group_id" value='{{$group->id}}' id="ID" readonly>

        <ul>


            <li>
                <label for="surname">Фамилия студента:</label>
                <input type="text" name="surname" placeholder="Иванов" id="surname">
            </li>
            <li>
                <label for="name">Имя студента:</label>
                <input type="text" name="name" placeholder="Сергей" id="name">
            </li>
        </ul>
    </fieldset>
    <div>
        <button type="submit">Отправить</button>
    </div>
    </form>
    <a href="{{route('group.show', $group->id)}}">Вернуться назад</a>

</body>

</html>