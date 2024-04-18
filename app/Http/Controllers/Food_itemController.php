<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Food_itemController extends Controller
{
    public function postHandler(Request $request)
    {
        $request->validate([
            "email"=>"required",
            "name"=>"required",
            "pwd"=>"required"
        ]);


    }
}
