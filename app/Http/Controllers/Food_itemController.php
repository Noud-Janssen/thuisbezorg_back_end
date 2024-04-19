<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food_item;

class Food_itemController extends Controller
{
    public function postHandler(Request $request)
    {

        $request->validate([
            "action"=>"required"
        ]);

        if ($request->action == "Create") {
            $item = new Food_item();
            $item->name = "";
            $item->description = "";
            $item->price = 99;
            $item->save();
            return redirect()->route('admin.menu', ["status"=>"Creation Succes!"]);
        }

        if ($request->action == "Delete") {
            Food_item::find($request->id)->delete();
            return redirect()->route('admin.menu', ["status"=>"Deletion Succes!"]);
        }

        $req = $request->validate([
            "name"=>"required",
            "description"=>"required",
            "price"=>"required",
            "id"=>"required",
            "action"=>"required"
        ]);


        if ($request->action == "Update") {
            $item = Food_item::find($request->id);
            $item->name = $request->name;
            $item->description = $request->description;
            $item->price = $request->price;

            $item->save();
            return redirect()->route('admin.menu', ["status"=>"Saved item!"]);
        }



        return redirect()->route('admin.menu');
    }

    public function create(Request $request)
    {

    }
}
