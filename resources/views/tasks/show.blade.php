<!DOCTYPE html>
<html>
<head>
    <title>Task: {{ $task->title }}</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 40px; }
        .task-details { border: 2px solid #333; padding: 20px; border-radius: 5px; }
        .back-link { margin-top: 20px; display: inline-block; }
    </style>
</head>
<body>
    <h1>Task Details</h1>

    <div class="task-details">
        <h2>{{ $task->title }}</h2>
        <p><strong>Description:</strong> {{ $task->description ?? 'No description' }}</p>
        <p><strong>Status:</strong> {{ $task->status }}</p>
        <p><strong>Created:</strong> {{ $task->created_at->format('d.m.Y H:i') }}</p>
        <p><strong>Updated:</strong> {{ $task->updated_at->format('d.m.Y H:i') }}</p>
    </div>

    <a href="/tasks" class="back-link">← Back to All Tasks</a>
    <br>
    <a href="/">Back to Home</a>
</body>
</html>