<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/tasks', function () {
    $tasks = Task::latest()->get();

    return view('tasks.index', compact('tasks'));
});

// Маршрут для просмотра одной задачи
Route::get('/tasks/{id}', function ($id) {
    $task = Task::findOrFail($id);

    return view('tasks.show', compact('task'));
});
