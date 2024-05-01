<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Внести правку в группу</title>
</head>

<body>
    <form action="{{route('group.update', $group->id)}}" method="post" /*target="_blank" * />
    @csrf
    @method('patch')
    <fieldset>
        <legend>Внести правку</legend>
        <ul>
            <li>
                <label for="name">Название группы:</label>
                <input type="text" name="title" placeholder="JS-12" id="name" value="{{$group->title}}">
            </li>
            <li>
                <label for="date">Дата начала обучения</label>
                <input type="date" name="start_from" id="date" value="{{$group->start_from}}">
            </li>

            @if($group->is_active == true)
            <li>
                <input type="radio" name="is_active" id="active-true" value="1" checked>
                <label for="active-true">Группа начала обучение</label>
            </li>
            <li>
                <input type="radio" name="is_active" id="active-false" value="0">
                <label for="active-false">Группа ожидает начало обучения</label>
            </li>
            @else
            <li>
                <input type="radio" name="is_active" id="active-true" value="1">
                <label for="active-true">Группа начала обучение</label>
            </li>
            <li>
                <input type="radio" name="is_active" id="active-false" value="0" checked>
                <label for="active-false">Группа ожидает начало обучения</label>
            </li>
            @endif
        </ul>
    </fieldset>
    <div>
        <button type="submit">Применить изменения</button>
    </div>
    </form>
    <a href="{{route('group.show', $group->id)}}">Вернуться назад</a>

</body>

</html>