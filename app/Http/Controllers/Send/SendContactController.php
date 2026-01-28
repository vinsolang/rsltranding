<?php

namespace App\Http\Controllers\Send;

use App\Http\Controllers\Controller;
use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SendContactController extends Controller
{
     public function send(Request $request)
    {
       
    $data = $request->validate([
        'name' => 'required|string',
        'email' => 'required|email',
        'phone' => 'required|string',
        'position' => 'required|string',
        'cv' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
        'cover_letter' => 'nullable|file|mimes:pdf,doc,docx|max:5120',
    ]);

    // Store files if exist
    if ($request->hasFile('cv')) {
        $data['cv_path'] = $request->file('cv')->store('applications', 'public');
    }

    if ($request->hasFile('cover_letter')) {
        $data['cover_letter_path'] = $request->file('cover_letter')->store('applications', 'public');
    }

    Mail::to('info@rsltrading.com')->send(new ContactMail($data));

    return back()->with('success', 'Contact Form submitted successfully!');
    }
}
