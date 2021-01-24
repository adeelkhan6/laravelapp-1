<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;

use App\Mail\Contact;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function show()
    {
        return view('contact');
    }

    public function store()
    {
        request()->validate(['email' => 'required|email']);

        // Mail::raw('it works !', function($message) {
        //     $message->to(request('email'))
        //         ->subject('Hello yar');
        // });

        Mail::to(request('email'))
            // ->send(new ContactMe('shirts'));
            ->send(new Contact());

        return redirect('/contact')
            ->with('message', 'Email Sent');
    }
}
