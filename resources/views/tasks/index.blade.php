<html>
    <head>

    </head>
    <body>
        <ul>
            @foreach ($tasks as $task)
                <li>
                    <a href="/task/{{ $task->id }}">

                    {{ $task->body }}
                    </a>
                </li>
            @endforeach
        </ul>
    </body>
</html>