<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail ;

class ContactController extends Controller
{
    public function create(){
        return view('contact') ;
    }

    public function store(Request $request){
        $data = $request->validate(
            [
               "name" => 'required'
            ]
        ) ;

        Mail::send('emails.contact' , $data , function($message){
            $message->to('bougtoub.samia.solicode@gmail.com')
            ->subject('Nouveau message de contact');
        }

    );
    }
}
