<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
// use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\File;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register');
    }

    
    public function regisUser(Request $request)
    {
        $request->validate([
            'username' => 'required|min:3|max:255',
            'password' => 'required|min:3|max:255',
        ]);

        $user = new User();

        // encrypted password
        $password = bcrypt($request->password);

        $user->username = $request->username;
        $user->password = $password;

        $user->save();

        return redirect('/login');

    }

    
    
}
