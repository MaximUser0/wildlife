<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{

    public function login(Request $request){
        $user = User::where('name', '=', $request['name'])->where('password', '=', md5($request->input('password')))->first();
        if ($user) {
            $token = $user->createToken('user_token')->plainTextToken;
            return response()->json([
                "data" => [
                    "user_token" => $token
                ]
            ], 200, [ "Content-type" => "application/json" ]);
        } else {
            return response()->json(["error" => [
                "code" => 401,
                "message" => "Authentication failed"
            ]], 401, [ "Content-type" => "application/json" ]);
        }
    }

    public function logout()
    {
        auth()->user()->tokens()->delete();
        return response()->json([
            "data" => [
                "message" => "logout"
            ]
        ], 200, [ "Content-type" => "application/json" ]);  
    }

}
