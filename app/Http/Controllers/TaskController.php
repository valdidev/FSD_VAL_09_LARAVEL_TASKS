<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use PhpParser\Node\Stmt\TryCatch;

// use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function createTask()
    {
        return 'create task';
    }

    public function getTasks()
    {
        Log::info('Getting all tasks');
        try {
            $tasks = DB::select('select * from tasks');

            return response([
                'success' => true,
                'message' => 'All tasks retrieved ok',
                'data' => $tasks
            ], 200);
        } catch (\Throwable $th) {

            Log::error($th->getMessage());

            return response([
                'success' => true,
                'message' => 'All tasks retrieved ok',
                'data' => 'No se han podido recuperar las tareas'
            ], 500);
        }
    }
}
