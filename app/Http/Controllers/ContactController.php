<?php

namespace App\Http\Controllers;

use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function contactPost(Request $request)
    {
        $request->validate([
            'name' =>'required',
            'email' =>'required|email',
           'subject' =>'required',
           'message' =>'required',
        ]);

        
        Contact::Create([
            'name' => $request->name,
            'email' => $request->email,
           'subject' => $request->subject,
           'message' => $request->message,
        ]);
        return redirect()->route('contact')->with('success', 'Your message has been sent successfully');
    }

}