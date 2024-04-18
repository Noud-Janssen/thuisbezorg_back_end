<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            "email"=>"required",
            "name"=>"required",
            "pwd"=>"required"
        ]);

        $new_user = new User;

        $new_user->name = $request->name;
        $new_user->email = $request->mail;
        $new_user->password = $request->pwd;

        $new_user->save();
        
        return redirect()->route('login');
    }

    public function login(Request $request) {
        $cred = $request->validate([
            "email"=>"required",
            "password"=>"required"
        ]);

        if (Auth::attempt($cred)) {
            return redirect()->route("admin.main");
        } else {
            return redirect()->back()->withInput();
        }


    }

    public function logout()
    {
        auth()->logout();
        
        return redirect()->route('home.page');
    }
}
