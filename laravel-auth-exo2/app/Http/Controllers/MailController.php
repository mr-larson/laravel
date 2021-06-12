<?php

namespace App\Http\Controllers;

use App\Mail\FormulaireContact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function sendMail(Request $request){
        $contenuEmail =[    
            "name" => $request->name,
            "email" => $request->email,
            "subject" => $request->subject,
            "message" => $request->message,
        ];
        
        Mail::to("gauthier@test.com")->send(new FormulaireContact($contenuEmail));
        
        /* return "Message envoyé"; */
        return redirect("/#contact")->with("message_mail", "Le Message est bien envoyé");
    }
}
