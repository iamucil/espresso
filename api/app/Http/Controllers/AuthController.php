<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\UserEmail;

class AuthController extends Controller
{
    public function Register(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string',
            'email' => 'required|email',
            'password' => 'required|confirmed',
        ]);

        try {
            $user = new User;
            $user->name = $request->input("name");
            $userEmail = new UserEmail;
            // return successful response
            return response()->json(['user' => $user, 'message' => 'CREATED'], 201);
        } catch (\Exception $e) {
            return response()->json(['message' => 'User Registration Failed!'], 409);
        }
    }
}
