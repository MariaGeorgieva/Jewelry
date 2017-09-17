<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ContactForm;

class ContactController extends Controller
{
    public function create()
    {
        return view('pages.contacts');
    }

    public function store(Request $request)
    {
        \Mail::send('emails.contact_email',
            array(
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'user_message' => $request->get('message')
            ), function ($message) {
                $message->from('JAW@mail.com');
                $message->to('m.georgieva17@icloud.com\'', 'Admin')->subject('J.A.W. Feedback');
            },
            flash('Thanks for sending your message!!!', 'Success'));

        return redirect('/contacts');
    }
}
