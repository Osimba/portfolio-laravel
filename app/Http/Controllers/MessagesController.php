<?php

namespace App\Http\Controllers;

use App\Http\Middleware\Honeypot;
use Illuminate\Http\Request;
use App\Models\Message;
use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller
{
    public function __construct()
    {
        return $this->middleware([Honeypot::class]);
    }

    /**
     * Store the messages sent by site visitors
     * 
     * @param Request $request
     * @return Response 
     * 
     */
    public function store(Request $request) {
        
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
