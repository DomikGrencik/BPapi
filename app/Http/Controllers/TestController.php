<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Test;

class TestController extends Controller
{
    /** @var PatientController */
    private $patientController;

    public function __construct(PatientController $patientController)
    {
        parent::__construct();

        $this->patientController = $patientController;
    }

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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_patient' => 'required|numeric',
        ]);

        $patient = $this->patientController->getPatientById($request->id_patient);

        if (!$patient) {
            return response([
                'message' => 'Patient not found.'
            ], 400);
        }

        $test = Test::create();

        if (!$test) {
            return response([
                'message' => 'Failed to create test.'
            ], 400);
        }

        $patient->tests()->save($test);

        return response([
            'message' => 'Test added.'
        ], 201);
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $test = Test::find($id);

        if (Test::destroy($test)) {
            return response([
                'message' => 'Test deleted.'
            ]);
        }

        return response([
            'message' => 'Failed to delete test.'
        ], 400);
    }
}
