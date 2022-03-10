<?php

namespace App\Http\Controllers;

use \App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::all();
    }

    /**
     * Display the authenticated user.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return auth()->user();
    }

    /**
     * Update the specified resource in storage.
     *
     * @return \Illuminate\Http\Response
     */
    public function update()
    {
        request()->validate([
            'password' => 'min:8'
        ]);

        $id = auth()->user()->id;
        $user = User::find($id);

        $user->update(request()->only('login', 'name', 'surename'));
        if (request()->password) {
            $user->update(['password' => Hash::make(request()->password)]);
        }

        return $user;
    }
}
