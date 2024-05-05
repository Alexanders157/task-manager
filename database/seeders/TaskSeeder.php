<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Task;
use Database\Factories\TaskFactory;

class TaskSeeder extends Seeder
{
    public function run()
    {
        \App\Models\Task::factory()->count(10)->create();
   }
}



