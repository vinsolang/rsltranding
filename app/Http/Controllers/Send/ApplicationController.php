<?php

namespace App\Http\Controllers\Send;

use App\Http\Controllers\Controller;
use App\Mail\ApplicationMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ApplicationController extends Controller
{
     public function send(Request $request)
    {
        $data = $request->validate([
            'name' => 'required',
            'country_code' => 'required',
            'phone' => 'required',
            'company' => 'nullable',
            'trade_type' => 'required',
            'country' => 'required',
            'commodities' => 'nullable|array',
            'commodityOtherInput' => 'nullable',
            'address' => 'nullable',
            'email' => 'required|email',
            'message' => 'nullable',
        ]);

        //  SEND TO DIFFERENT GMAIL
        Mail::to('vinsolang9@gmail.com')->send(new ApplicationMail($data));

        return back()->with('successfully', 'Your message has been sent successfully!');
    }
}
// info@rsltrading.com