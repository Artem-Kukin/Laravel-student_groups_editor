<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Список групп</title>
</head>

<body>
    <h2>Добавить группу в списки</h2>
    <ul>
        <li><a href="{{route('group.create')}}">Перейти к добавлению</a></li>
    </ul>

    <h2>Список групп начавшие программу обучения</h2>
    <ul>
        @foreach ($groups as $group)
        @if($group->is_active == true)
        <li><a href="{{route('group.show', $group->id)}}">
                {{$group->title}}
            </a></li>
        @endif
        @endforeach
    </ul>


    <h2>Список групп ожидающие запуска программы обучения</h2>
    <ul>
        @foreach ($groups as $group)
        @if($group->is_active == false)
        <li><a href="{{route('group.show', $group->id)}}">
                {{$group->title}}
            </a></li>
        @endif
        @endforeach



    </ul>

</body>

</html>