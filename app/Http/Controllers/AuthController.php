<?php

namespace App\Http\Controllers;



use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        return view('admin/login');
    }

    public function login(Request $request)
    {

        Validator::make($request->all(),[
            'username' => 'required|string',
            'password' => 'required|string'
        ])->validate();

        $request->session()->regenerate();

        return redirect()->route('admin');
    }
}
