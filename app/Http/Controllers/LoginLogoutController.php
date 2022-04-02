<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
// use App\Models\Auth;

class LoginLogoutController extends Controller
{
    public function index()
    {
        return view('login');
    }


    public function store(Request $request)
    {
        $credentials = $request->validate( [
            'username' => 'required',
            'password' => 'required',
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            
            if(auth()->user()->username == 'admin'){
                return redirect()->intended('/dashboard');
            }
            else{
                return redirect()->intended('/home');
            }
           
        }

        return back()->with('error', 'Login Gagal, Silahkan coba lagi.');
    }



    public function logout(Request $request)
    {
        Auth::logout();
    
        $request->session()->invalidate();
    
        $request->session()->regenerateToken();
    
        return redirect('/login');
    }


}
