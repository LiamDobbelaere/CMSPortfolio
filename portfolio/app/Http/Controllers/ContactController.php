<?php

namespace App\Http\Controllers;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller {
    public function sendMail(Request $request) {
        Mail::to('tom.dobbelaere@outlook.com')->send(new ContactMail($request->name, $request->body));

        return view('contact', ['complete' => true]);
    }
}