<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Patient;

class PatientController extends Controller
{
    /**
     * Get patient by id for current user according to his/her role.
     *
     * @param  int  $id
     * @return App\Models\Patient|false
     */
    public function getPatientById($id)
    {
        $user = auth()->user();

        if ($user->hasRole('admin')) {
            return Patient::find($id);
        } elseif ($user->hasRole('user')) {
            return $user->patients->where('id_patient', $id)->values()->first();
        }

        return false;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = auth()->user();

        if ($user->hasRole('admin')) {
            return Patient::all();
        } elseif ($user->hasRole('user')) {
            return $user->patients;
        }
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
            'name' => 'required|alpha',
            'surename' => 'required|alpha',
            'birth_year' => 'required|numeric',
            'gender' => 'required'
        ]);

        $user_id = "";

        $user = auth()->user();
        if ($user->hasRole('admin')) {
            $user_id = $request->id ?? "";

            if ($user_id == $user->id) {
                return response([
                    'message' => 'Cannot add patient to admin.'
                ], 400);
            }
        } elseif ($user->hasRole('user')) {
            $user_id = $user->id;
        }

        if ($user_id == "") {
            return response([
                'message' => 'Foreign key id must not be empty.'
            ], 400);
        }

        $patient = Patient::create([
            'name' => $request->name,
            'surename' => $request->surename,
            'initials' => "",
            'birth_year' => $request->birth_year,
            'gender' => $request->gender,
            'id' => $user_id
        ]);

        $initials = strval(substr($patient->name, 0, 1) . substr($patient->surename, 0, 1));
        $patient->update(['initials' => $initials]);

        if ($patient) {
            return response([
                'message' => 'Patient added.'
            ], 201);
        }
        return response([
            'message' => 'Failed to add.'
        ], 400);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patient = $this->getPatientById($id);

        if (!$patient) {
            return response([
                'message' => 'Patient not found.'
            ], 400);
        }

        return $patient;
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
            'name' => 'alpha',
            'surename' => 'alpha',
            'birth_year' => 'numeric'
        ]);

        $patient = $this->getPatientById($id);

        if (!$patient) {
            return response([
                'message' => 'Patient not found.'
            ], 400);
        }

        $patient->update($request->only('name', 'surename', 'birth_year', 'gender'));

        $initials = strval(substr($patient->name, 0, 1) . substr($patient->surename, 0, 1));
        $patient->update(['initials' => $initials]);

        return $patient;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $patient = $this->getPatientById($id);

        if (!$patient) {
            return response([
                'message' => 'Patient not found.'
            ], 400);
        }

        if (Patient::destroy($id)) {
            return response([
                'message' => 'Patient deleted.'
            ]);
        }
        return response([
            'message' => 'Failed to delete.'
        ], 400);
    }
}
