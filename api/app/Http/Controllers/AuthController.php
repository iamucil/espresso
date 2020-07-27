<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class AuthController extends Controller
{
    public function Register(Request $request)
    {
        $this->validate(
            $request,
            [
                'name' => 'required|string'
            ]
        );
    }
}
