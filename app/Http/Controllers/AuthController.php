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
        if (auth()->user()->hasRole('admin')) {
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

            if (!$user) {
                return response([
                    'message' => 'Failed to register.'
                ], 400);
            }

            $sureNameCut = mb_strtolower(substr($user->surename . $user->name, 0, 5), 'UTF-8');

            $login = strval('x' . $sureNameCut . $user->id);
            $user->update(['login' => $login]);
            $user->assignRole("user");

            if ($user) {
                return response([
                    'message' => 'User registered.'
                ], 201);
            }
        }

        return response([
            'message' => 'Failed to register.'
        ], 400);
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
        $token = auth('api')->attempt($credentials);

        if ($token) {
            return response([
                'token' => $token
            ]);
        }
        return response([
            'message' => 'Bad login or password.'
        ], 401);
    }

    /**
     *
     * @return \Illuminate\Http\Response
     */
    public function logout()
    {
        auth()->logout();
        return response([
            'message' => 'Logout.'
        ]);
    }
}
