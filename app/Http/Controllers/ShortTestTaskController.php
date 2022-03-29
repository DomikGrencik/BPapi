<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShortTest;
use App\Models\ShortTestTask;
use App\Models\Task;

class ShortTestTaskController extends Controller
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
        $short_test = ShortTest::find($id);

        if (!$short_test) {
            return response([
                'message' => 'Short test does not exist.'
            ], 400);
        }

        $id_patient = $short_test->id_patient;

        $user = auth()->user();
        if ($user->hasRole('user')) {
            if (count($user->patients->where('id_patient', $id_patient)) == 0) {
                return response([
                    'message' => 'Permission denied.'
                ], 403);
            }
        }

        return ShortTestTask::all()->where('id_short_test', $id)->values();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function getShortTestTaskPoints(Request $request, $id)
    {

        $request->validate([
            'id_short_test' => 'required|numeric',
        ]);

        $short_test = ShortTest::find($request->id_short_test);

        if (!$short_test) {
            return response([
                'message' => 'Short test does not exist.'
            ], 400);
        }

        $task = Task::find($id);

        if (!$task) {
            return response([
                'message' => 'Task does not exist.'
            ], 400);
        }

        $short_test_task = ShortTestTask::all()->where('id_short_test', $short_test->id_short_test)->where('id_task', $id)->values()->first();

        if (!$short_test_task) {
            return response([
                'message' => 'Record does not exist.'
            ], 400);
        }

        $id_patient = $short_test->id_patient;

        $user = auth()->user();
        if ($user->hasRole('user')) {
            if (count($user->patients->where('id_patient', $id_patient)) == 0) {
                return response([
                    'message' => 'Permission denied.'
                ], 403);
            }
        }

        return [$task, $short_test_task];
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
            'id_short_test' => 'required|numeric',
            'id_task' => 'required|numeric|min:46|max:54',
            'points' => 'required|numeric|max:10'
        ]);

        $short_test = ShortTest::find($request->id_short_test);

        if (!$short_test) {
            return response([
                'message' => 'Short test does not exist.'
            ], 400);
        }

        $task = Task::find($request->id_task);

        if (!$task) {
            return response([
                'message' => 'Task does not exist.'
            ], 400);
        }

        $id_patient = $short_test->id_patient;

        $user = auth()->user();
        if ($user->hasRole('user')) {
            if (count($user->patients->where('id_patient', $id_patient)) == 0) {
                return response([
                    'message' => 'Permission denied.'
                ], 403);
            }
        }

        $short_test->tasks()->attach($task->id_task, ['points' => $request->points]);

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
            'id_short_test' => 'required|numeric',
            'points' => 'required|numeric|max:10'
        ]);

        $short_test = ShortTest::find($request->id_short_test);

        if (!$short_test) {
            return response([
                'message' => 'Short test does not exist.'
            ], 400);
        }

        $task = Task::find($id);

        if (!$task) {
            return response([
                'message' => 'Task does not exist.'
            ], 400);
        }

        $id_patient = $short_test->id_patient;

        $user = auth()->user();
        if ($user->hasRole('user')) {
            if (count($user->patients->where('id_patient', $id_patient)) == 0) {
                return response([
                    'message' => 'Permission denied.'
                ], 403);
            }
        }

        $short_test_task = ShortTestTask::all()->where('id_short_test', $short_test->id_short_test)->where('id_task', $id)->values()->first();

        if (!$short_test_task) {
            return response([
                'message' => 'Task was not evaluated yet.'
            ], 400);
        }

        if ($short_test->tasks()->updateExistingPivot($id, ['points' => $request->points])) {
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
