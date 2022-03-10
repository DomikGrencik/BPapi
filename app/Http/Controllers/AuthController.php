<?php

namespace App\Http\Controllers;

use \App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function register()
    {
        request()->validate([
            'name' => 'required|alpha',
            'surename' => 'required|alpha',
            'password' => 'required|min:8'
        ]);

        $user = User::create([
            'login' => "",
            'name' => request()->name,
            'surename' => request()->surename,
            'password' => Hash::make(request()->password)
        ]);
        $login = 'x' . substr($user->surename, 0, 5) . $user->id;
        $user->update(['login' => $login]);

        $user
            ? response(['message' => 'User registered.'], 201)
            : response(['message' => 'Failed to register.'], 400);
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function unregister()
    {
        $user = auth()->user();

        (User::destroy($user->id))
            ? response(['message' => 'User account unregistered.'], 200)
            : response(['message' => 'Failed to unregister'], 400);
    }

    /**
     *
     * @return JWT token if successfull or \Illuminate\Http\Response if failed
     */
    public function login()
    {
        request()->validate([
            'login' => 'required',
            'password' => 'required'
        ]);

        $credentials = request()->only(['login', 'password']);
        $token = auth()->attempt($credentials);

        return $token ?
            response()->json(compact('token')) :
            response(['message' => 'Bad login or password.'], 401);
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        auth()->logout();
        return response(['message' => 'Logout.'], 200);
    }
}
