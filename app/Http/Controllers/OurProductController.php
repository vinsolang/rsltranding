<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OurProductController extends Controller
{
    public function index(){
        return view('frontend.ourproduct');
    }
}
