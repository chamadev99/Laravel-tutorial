<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class TestContoller extends Controller
{
    public function index()
    {
        return response()->json([
            'message' => 'Hello World'
        ]);
    }


    public function login(Request $request)
    {

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            return response()->json([
                'message' => Auth::user()->createToken('token')->plainTextToken
            ]);
        }

        return response()->json([
            'message' => 'Unauthorized'
        ], 401);
    }
}
