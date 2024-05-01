<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Создание группы</title>
</head>

<body>
    
    <form action="{{route('group.store')}}" method="post" /*target="_blank"*/>
        @csrf
        <fieldset>
            <legend>Создать группу</legend>
            <ul>
                <li>
                    <label for="name">Название группы:</label>
                    <input type="text" name="title" placeholder="JS-12" id="name">
                </li>
                <li>
                    <label for="date">Дата начала обучения</label>
                    <input type="date" name="start_from" value="2024-01-24" id="date">
                </li>

                <li>
                    <input type="radio" name="is_active" id="active-true" value="1">
                    <label for="active-true">Группа начала обучение</label>
                </li>
                <li>
                    <input type="radio" name="is_active" id="active-false" value="0">
                    <label for="active-false">Группа ожидает начало обучения</label>
                </li>
            </ul>
        </fieldset>
        <div>
            <button type="submit">Отправить</button>
        </div>
    </form>
    <a href="{{route('groups.index')}}">Вернуться назад</a>
</body>

</html>