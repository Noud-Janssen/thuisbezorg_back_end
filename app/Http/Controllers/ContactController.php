<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\message;

class ContactController extends Controller
{
    public function contactPost(Request $request)
    {
        $item = $request->validate([
            "subject" => 'required',
            "from" => 'required',
            "mail" => 'required',
            "message_txt" => 'required'
        ]);

        $post_item = new message;

        $post_item->subject = $request->subject;
        $post_item->sender_name = $request->from;
        $post_item->text = $request->message_txt;
        $post_item->email = $request->mail;

        $post_item->save();

        return view('contact_status');
    }
}