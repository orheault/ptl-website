<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class HomeController extends Controller 
{

    public function show()
    {
        return view('welcome');
    }

    public function contactForm(Request $request){
        $request->validate([
             'firstName' => 'required',
             'lastName' => 'required',
             'email' => 'required',
             'message' => 'required'
        ]);
        
        $lastName = $request->input('lastName');
        Log::debug($lastName);
        // todo: send a notification that a customer wants information to info@ptl-system.com
        
        return response()->json(['message' => 'Votre message à bien été envoyé. Nous allons vous contacter sous peu.']);
    }
}