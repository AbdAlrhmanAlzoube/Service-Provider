<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Models\Connect;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function showContactForm()
    {
        return view('customer.pages.contact');
    }

    public function submitContactForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'phone' => 'nullable|string',
            'subject_type' => 'required|string',
            'subject' => 'required|string',
            'message' => 'required|string',
        ]);

        Connect::create([
            'email' => $request->email,
            'phone' => $request->phone,
            'subject_type' => $request->subject_type,
            'subject' => $request->subject,
            'message' => $request->message,
        ]);

        return redirect()->route('contact')->with('success', 'Your message has been sent successfully.');
    }
}
