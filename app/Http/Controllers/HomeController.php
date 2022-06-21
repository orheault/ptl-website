<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
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
             'message' => 'required',
        ]);
        
        $firstName = $request->post('firstName');
        $lastName = $request->post('lastName');
        $phoneNumber = $request->post('phoneNumber');
        $email =  $request->post('email');
        $formMessage =  $request->post('message');

        $to_name = 'info@ptl-system.com';
        $to_email = 'info@ptl-system.com';
        $data = array(
            'firstname'=> $firstName,
            'lastname' => $lastName,
            'phonenumber' => $phoneNumber,
            'email' => $email,
            'formMessage' => $formMessage
        );

        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)->subject('Formulaire contact');
            $message->from('robot@ptl-system.com', 'Mail System');
        });

        return response()->json(['message' => 'Votre message à bien été envoyé. Nous allons vous contacter sous peu.']);
    }
}