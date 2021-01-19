<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function sendMessage(Request $request) {
        
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'message' => 'required'
        ]);

        $message = new Message;
        $message->name = $request->name;
        $message->email = $email = $request->email;
        $message->message = $request->message;
        $message->save();

        Mail::send('email', 
            array(
                'name' => $request->name,
                'email' => $request->email,
                'userMessage' => $request->message
            ), function($message) use ($email) {
                $message->from($email);
                $message->to('osiqua@gmail.com', 'Owner')->subject('Portfolio Form');

            });

        return back()->with('success', 'Thank you! I\'ll get back to you shortly.');
    }
}
