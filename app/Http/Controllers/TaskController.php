<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return  response()->json(['data' => Task::paginate(5)]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create() {}

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        try {
            $request->validate([
                'title' => 'required',
                'description' => 'required',
                'status' => 'required'
            ]);
            $task = Task::create([
                'title' => $request->title,
                'description' => $request->description,
                'status' => $request->status
            ]);

            return response()->json(['data' => $task]);
        } catch (\Exception $e) {
            throw $e;
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Task $task)
    {
        //$task = Task::find($task);
        return response()->json(['data' => $task]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Task $task)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Task $task)
    {
        $task->update([
            'title' => "dfdfd",
            'description' => "dfdfdf",
            'status' => "completed"
        ]);

        return response()->json(['data' => $task]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Task $task)
    {
        $task->delete();
    }
}
