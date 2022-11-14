<?php

namespace App\Http\Controllers;

use App\Mail\ContactNotification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


class ContactController extends Controller
{

    public function create () {
        return view ('contact');
    }
    
    public function store (Request $request) {

      
        Mail::to('david.martinez@aulab.es')->send (
            new ContactNotification(
                $request->input('name'),
                $request->input('email'),
                $request->input('description')
            )
        );
    return back ()
        ->with ('code', '200')
        ->with ( 'message', 'Formulario enviado correctamente');

    //    return view ('contact', ['code' => '200', 'message' => 'Formulario enviado correctamente']);
    }
}
