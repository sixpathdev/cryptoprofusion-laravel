<?php

namespace App\Http\Controllers;

use App\Mail\Contact;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contactsupport(Request $request)
    {
            $request->validate([
                'name' => 'required|max:255',
                'email' => 'required',
                'subject' => 'required|max:120',
                'message' => 'required',
            ]);
            
        try {
            $name = $request->input('name');
            $email = $request->input('email');
            $subject = $request->input('subject');
            $message = $request->input('message');
            
            Mail::to('support@cryptoprofusion.com')->send(new Contact($name, $email, $subject, $message));
            return back()->with('success', 'Email sent to support successfully');
        } catch (Exception $e) {
            return back()->with('error', 'Error sending mail');
        }
    }
}
