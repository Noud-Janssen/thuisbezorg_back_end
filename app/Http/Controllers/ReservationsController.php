<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservations;

class ReservationsController extends Controller
{
    function create(Request $request)
    {
        $request->validate([
            "name"=>"required",
            "amount"=>"required",
            "date"=>"required",
            "time"=>"required",
        ]);

        $reservation = new Reservations;
        $reservation->name = $request->name;
        $reservation->amount = $request->amount;
        $reservation->date = $request->date;
        $reservation->time = $request->time;

        $reservation->save();

        return redirect()->route('home.page');
    }

    function edit(Request $request)
    {
        $request->validate([
            "id"=>"required",
            "action"=>"required"
        ]);

        $reservation = Reservations::find($request->id);

        if ($request->action == "Decline") {
            $reservation->delete();
        }
        if ($request->action == "Accept") {
            $reservation->accepted = true;
            $reservation->save();
        }

        return redirect()->route('admin.reservations');

    }
}
