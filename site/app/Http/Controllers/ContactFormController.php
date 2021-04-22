<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactFormController extends Controller
{
    // Create Contact Form
    public function createForm(Request $request) {
        return view('pages.contact');
    }

    // Store Contact Form data
    public function ContactUsForm(Request $request) {

        // Form validation
        $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email',
            'subject'=>'required',
            'message' => 'required'
        ]);

        //  Store data in database
        Contact::create($request->all());

        //  Send mail to admin
        \Mail::send('mail', array(
            'first_name' => $request->get('first_name'),
            'last_name' => $request->get('last_name'),
            'email' => $request->get('email'),
            'subject' => $request->get('subject'),
            'message' => $request->get('message'),
        ), function($message) use ($request){
            $message->from($request->email);
            $message->to('gluckdesign.contact@gmail.com', 'Admin')->subject($request->get('subject'));
        });

        return redirect('/contact')->with('success', 'Votre message a bien été envoyé, merci!');
    }
}
