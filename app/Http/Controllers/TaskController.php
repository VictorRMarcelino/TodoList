<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Auth;
use Illuminate\Http\Request;
use Inertia\Inertia;

class TaskController extends Controller
{
    public function getView() {
        $userId = Auth::user()->id;
        $tasks = Task::where(['user_id' => $userId])->get();
        $tasks = $tasks->toArray();
        return Inertia::render('Todolist', ['tasks' => $tasks]);
    }
}
