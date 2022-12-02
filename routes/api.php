<?php

use App\Http\Controllers\TaskController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/* Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
}); */

Route::get('/tasks', function () {
    return ['tasks to my tasks app'];
});

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

Route::get('/task/{id}', function ($id) {
    return ['see task id: '.$id];
});