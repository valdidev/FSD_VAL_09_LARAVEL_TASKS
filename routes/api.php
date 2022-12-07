<?php

use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Request;

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

/* Route::get('/tasks', function () {
    return ['tasks to my tasks app'];
}); */

Route::post('/tasks', function () {
    return 'posts tasks';
});

Route::post('/task/create', [TaskController::class, 'createTask']);

Route::put('/tasks', function () {
    return 'updating tasks';
});

Route::delete('/tasks', function () {
    return 'deleting tasks';
});

Route::get('/tasks', [TaskController::class, 'getTasks']);

Route::get('/task/{id}', function ($id) {
    return ['see task id: '.$id];
});