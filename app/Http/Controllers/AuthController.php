<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function login(Request $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                return response()->json([
                    'token' => $user->createToken(time())->plainTextToken
                ]);
            }
        }
        return response()->json(
            ['message' => 'email ou mot de passe éronné'],
            401
        );
    }

    public function logout(Request $request)
    {
        $user = User::whereEmail($request->email)->first()->tokens()->delete();
        /*  $request->user()->tokens()->delete(); */

        /* auth()->user()->tokens()->delete(); */
        return response()->json([
            'message' =>  $user
        ]);
    }

    public function dashboard()
    {
        return response()->json([
            'msg' => 'success to connect'
        ]);
    }
}