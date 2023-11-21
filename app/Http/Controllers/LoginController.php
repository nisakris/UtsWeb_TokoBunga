<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session; 
use App\Models\Product;

class LoginController extends Controller
{
    public function login()
    {
        if (Auth::check()) 
        {
            return redirect('product');
        }
        else
        {
            return view('login');
        }
    }

    public function showLoginForm()
    {
        return view('login');
    }

    public function loginaksi(Request $request)
    {
        $data = [
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ];

        if (Auth::attempt($data)) {
            return redirect()->route('product');
        } else {
            Session::flash('error', 'Email atau Password Salah');
            return redirect('login');
        }
    }

    public function logoutaksi()
    {
        Auth::logout();
        return redirect('login');
    }
}
