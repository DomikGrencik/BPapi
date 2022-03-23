<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;
use App\Models\TestTask;
use App\Models\Task;

class TestTaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function getTestPoints($id)
    {
        $test = Test::find($id);

        if (!$test) {
            return response([
                'message' => 'Test does not exist.'
            ], 400);
        }

        $id_patient = $test->id_patient;

        $user = auth()->user();
        if ($user->hasRole('user')) {
            if (count($user->patients->where('id_patient', $id_patient)) == 0) {
                return response([
                    'message' => 'Permission denied.'
                ], 403);
            }
        }

        return TestTask::all()->where('id_test', $id)->values();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_test' => 'required',
            'id_task' => 'required',
            'points' => 'required'
        ]);

        $test = Test::find($request->id_test);

        if (!$test) {
            return response([
                'message' => 'Test does not exist.'
            ], 400);
        }

        $id_patient = $test->id_patient;
        $task = Task::find($request->id_task);

        if (!$task) {
            return response([
                'message' => 'Task does not exist.'
            ], 400);
        }

        $user = auth()->user();
        if ($user->hasRole('user')) {
            if (count($user->patients->where('id_patient', $id_patient)) == 0) {
                return response([
                    'message' => 'Permission denied.'
                ], 403);
            }
        }

        $test->tasks()->attach($task->id_task, ['points' => $request->points]);

        return response([
            'message' => 'Task evaluated.'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'id_test' => 'required',
            'points' => 'required'
        ]);

        $test = Test::find($request->id_test);

        if (!$test) {
            return response([
                'message' => 'Test does not exist.'
            ], 400);
        }

        $id_patient = $test->id_patient;
        $task = Task::find($id);

        if (!$task) {
            return response([
                'message' => 'Task does not exist.'
            ], 400);
        }

        $user = auth()->user();
        if ($user->hasRole('user')) {
            if (count($user->patients->where('id_patient', $id_patient)) == 0) {
                return response([
                    'message' => 'Permission denied.'
                ], 403);
            }
        }

        if ($test->tasks()->updateExistingPivot($id, ['points' => $request->points])) {
            return response([
                'message' => 'Points updated.'
            ]);
        }

        return response([
            'message' => 'Task was not evaluated yet.'
        ], 403);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
