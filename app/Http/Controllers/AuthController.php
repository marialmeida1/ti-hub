<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    // Register
    public function register(Request $request)
    {

        $validate = $request->validate([
            'email' => 'required|string|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        $user = User::create([
            'email' => $validate['email'],
            'password' => bcrypt($validate['password'])
        ]);

        return response([
            'user' => $user,
            'token' => $user->createToken('secret')->plainTextToken
        ]);
    }


    // Login
    public function login(Request $request)
    {
        $validate = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        if (!Auth::attempt($validate)) {
            return response(
                ['message' => 'Cadastro Invalido!'],
                403
            );
        }
        return response([
            'user' => auth()->user(),
            'token' => $request->user()->createToken('secret')->plainTextToken
        ], 200);
    }

    // Logout
    public function logout(Request $request)
    {
        $request->user()->tokens()->delete();
        return response([
            'message' => 'Logout com sucesso!'
        ]);
    }

    public function user()
    {
        return response([
            'user' => auth()->user()
        ], 200);
    }
}
