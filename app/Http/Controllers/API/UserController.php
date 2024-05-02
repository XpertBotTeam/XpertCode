<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
class UserController extends Controller
{
    public function login(LoginRequest $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        if (Auth::attempt(compact('email', 'password'))) {

            $user = auth()->user();
            $access_token = $user->createToken('authToken')->plainTextToken;

            return response()->json([
                'status' => 'true',
                'message' => "User Authenticated Successfully",
                'token' => $access_token
            ]);
        } else {
            return response()->json([
                'status' => 'false',
                'message' => "Invalid Username or Password"
            ]);
        }
    }

    public function register(RegisterRequest $request)
    {
        $user = new User();
        $user->name = $request->get('name');
        $user->email = $request->get('email');
        $user->password=bcrypt($request->get('password'));
        $user->save();

        $access_token = $user->createToken('authToken')->plainTextToken;

        return response()->json([
            'status' => 'true',
            'message' => "User Registered Successfully",
            'token' => $access_token
        ]);
    }
}
