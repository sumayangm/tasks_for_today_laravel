<?php

namespace Database\Seeders;

use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class TaskTodaySeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'kyle',
            'full_name' => 'Kyle Christian Sumayang',
            'email' => 'kyle@example.com',
        ]);

        Task::insert([
            [
                'title' => 'Finish Laravel activity',
                'status' => 'pending',
                'task_date' => today()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Review Eloquent models',
                'status' => 'in progress',
                'task_date' => today()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Upload project to GitHub',
                'status' => 'pending',
                'task_date' => today()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Create database migration',
                'status' => 'completed',
                'task_date' => today()->subDay()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Test the task list page',
                'status' => 'pending',
                'task_date' => today()->subDay()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Plan tomorrow tasks',
                'status' => 'pending',
                'task_date' => today()->addDay()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Update README file',
                'status' => 'pending',
                'task_date' => today()->addDay()->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Check project requirements',
                'status' => 'completed',
                'task_date' => today()->addDays(2)->toDateString(),
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}