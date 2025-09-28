<!DOCTYPE html>
<html>
<head>
    <title>All Tasks</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .task { border: 1px solid #ddd; padding: 15px; margin: 10px 0; border-radius: 5px; }
        .pending { background-color: #fff3cd; }
        .in_progress { background-color: #cce7ff; }
        .completed { background-color: #d4edda; }
        .status { font-weight: bold; }
    </style>
</head>
<body>
    <h1>All Tasks ({{ $tasks->count() }})</h1>

    @if($tasks->isEmpty())
        <p>No tasks found.</p>
    @else
        @foreach($tasks as $task)
            <div class="task {{ $task->status }}">
                <h3>{{ $task->title }}</h3>
                <p>{{ $task->description }}</p>
                <p class="status">Status: {{ $task->status }}</p>
                <small>Created: {{ $task->created_at->format('d.m.Y H:i') }}</small>
                <br>
                <a href="/tasks/{{ $task->id }}">View Details</a>
            </div>
        @endforeach
    @endif

    <hr>
    <p><a href="/">Back to Home</a></p>
</body>
</html>