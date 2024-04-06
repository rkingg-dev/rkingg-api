<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task; // Import the Task model

class TaskController extends Controller
{
    // Retrieve all tasks
    public function index()
    {
        $tasks = Task::all();
        return response()->json(['tasks' => $tasks], 200);
    }

    // Create a new task
    public function store(Request $request)
    {
        $request->validate([
            'task_title' => 'required',
            'task_description' => 'required',
            // Add validation rules for other fields here
        ]);

        $task = Task::create($request->all());
        return response()->json(['task' => $task], 201);
    }

    // Retrieve a specific task by ID
    public function show($id)
    {
        $task = Task::findOrFail($id);
        return response()->json(['task' => $task], 200);
    }

    // Update an existing task
    public function update(Request $request, $id)
    {
        $request->validate([
            'task_title' => 'required',
            'task_description' => 'required',
            // Add validation rules for other fields here
        ]);

        $task = Task::findOrFail($id);
        $task->update($request->all());
        return response()->json(['message' => 'Task updated successfully', 'task' => $task], 200);
    }

    // Delete a task
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        $task->delete();
        return response()->json(['message' => 'Task deleted successfully'], 200);
    }
}
