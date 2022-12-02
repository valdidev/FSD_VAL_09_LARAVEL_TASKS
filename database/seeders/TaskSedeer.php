<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class TaskSedeer extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Log::info('ejecutando seeders de tasks info');
        Log::alert('ejecutando seeders de tasks alert');

        DB::table('tasks')->insert([
            [
                'name' => 'comprar',
                'description' => 'patatas',
                'status' => false
            ],
            [
                'name' => 'vender',
                'description' => 'cebollas',
                'status' => true
            ]
        ]);
    }
}
