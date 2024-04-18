<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $request->validate([
            "mail"=>"required",
            "name"=>"required",
            "pwd"=>"required"
        ]);

        $new_user = new User;

        $new_user->name = $request->name;
        $new_user->email = $request->mail;
        $new_user->password = $request->pwd;

        $new_user->save();

        
        return view("User.register", ["error"=>true]);
        return redirect()->route('home.page');
    }

    public function loginRequest() 
    {


        return redirect()->route('home.page');
    }
}
