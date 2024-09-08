<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $request->validate([
            'Name'=>'required',
            'Phone_Number'=>'required',
            'message'=>'required'
        ]);
    }
}
