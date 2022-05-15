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

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
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
     * Display the specified resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function getTestTaskPoints(Request $request)
    {
        $request->validate([
            'id_test' => 'required|numeric',
            'id_task' => 'required|numeric|max:45',
        ]);

        $test = Test::find($request->id_test);

        if (!$test) {
            return response([
                'message' => 'Test does not exist.'
            ], 400);
        }

        $task = Task::find($request->id_task);

        if (!$task) {
            return response([
                'message' => 'Task does not exist.'
            ], 400);
        }

        $test_task = TestTask::all()->where('id_test', $test->id_test)->where('id_task', $task->id_task)->values()->first();

        if (!$test_task) {
            return [
                'id_test' => $test->id_test,
                'id_task' => $task->id_task,
                'points' => "-1"
            ];
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

        return $test_task;
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
            'id_test' => 'required|numeric',
            'id_task' => 'required|numeric|max:45',
            'points' => 'required|numeric|max:2'
        ]);

        $test = Test::find($request->id_test);

        if (!$test) {
            return response([
                'message' => 'Test does not exist.'
            ], 400);
        }

        $task = Task::find($request->id_task);

        if (!$task) {
            return response([
                'message' => 'Task does not exist.'
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
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $request->validate([
            'id_test' => 'required|numeric',
            'id_task' => 'required|numeric|max:45',
            'points' => 'required|numeric|max:2'
        ]);

        $test = Test::find($request->id_test);

        if (!$test) {
            return response([
                'message' => 'Test does not exist.'
            ], 400);
        }

        $task = Task::find($request->id_task);

        if (!$task) {
            return response([
                'message' => 'Task does not exist.'
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

        $test_task = TestTask::all()->where('id_test', $test->id_test)->where('id_task', $task->id_task)->values()->first();

        if (!$test_task) {
            return response([
                'message' => 'Task was not evaluated yet.'
            ], 400);
        }

        if ($test->tasks()->updateExistingPivot($task->id_task, ['points' => $request->points])) {
            return response([
                'message' => 'Points updated.'
            ]);
        }

        return response([
            'message' => 'No changes.'
        ]);
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
