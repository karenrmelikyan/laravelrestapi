<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class TokenController extends Controller
{
    public function createToken(Request $request)
    {
        if ($user = Auth::user()) {
            return $user->createToken($user->name)->plainTextToken;
        }

        return 'User unauthorised';
    }
}
