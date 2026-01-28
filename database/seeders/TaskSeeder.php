<?php

namespace Database\Seeders;

use App\Models\Task;
use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Task::factory()->create([
            'description' => 'estudar vue',
            'status' => 1,
            'created_at' => date('d-m-Y h:i:s'),
            'user_id' => 1
        ]);
    }
}
