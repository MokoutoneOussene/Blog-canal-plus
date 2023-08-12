<?php

namespace App\Http\Controllers;

use notify;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    function login(Request $request)
    {
        if (Auth::attempt(['identifiant' => $request->identifiant, 'password' => $request->password])) {
            return redirect()->route('accueil');
        }
        else {
            return redirect()->route('index')->with('message', 'Identifiant ou password incorrect');
        }
    }

    function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
