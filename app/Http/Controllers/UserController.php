<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Http\Resources\UserResource;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (auth()->user()->hasRole('admin')) {
            return User::all()->map(function ($user) {
                return new UserResource($user);
            });
        }

        return response([
            'message' => 'You do not have sufficient access rights.'
        ], 403);
    }

    /**
     * Display the authenticated user.
     *
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return new UserResource(auth()->user());
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id = null)
    {
        $request->validate([
            'password' => 'min:8'
        ]);

        $user = auth()->user();
        if ($user->hasRole('admin')) {
            $user_id = is_null($id) ? $user->id : $id;
        } elseif ($user->hasRole('user')) {
            $user_id = $user->id;
        }

        $user = User::find($user_id);

        if (!$user) {
            return response([
                'message' => 'User not found.'
            ], 400);
        }

        $user->update($request->only('name', 'surename'));
        if ($request->password) {
            $user->update(['password' => Hash::make($request->password)]);
        }

        return $user;
    }
}
