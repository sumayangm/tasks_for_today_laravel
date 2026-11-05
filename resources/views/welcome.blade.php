<!DOCTYPE html>
<html>
<head>
    <title>Tasks for Today</title>
</head>
<body>
    <h1>Tasks for Today</h1>

    <nav>
        <a href="/">Today</a> |
        <a href="/tasks">Task List</a> |
        <a href="/profile">Profile</a> |
        <a href="/about">About</a>
    </nav>

    <h2>Today's Tasks</h2>

    @forelse ($tasks as $task)
        <p>
            <strong>{{ $task->title }}</strong><br>
            Status: {{ $task->status }}
        </p>
    @empty
        <p>No tasks for today.</p>
    @endforelse
</body>
</html>