<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactNotification;

class ContactController extends Controller
{
    public function create () {
        return view ('contact');
    }
    public function store (Request $request) {
        Mail::to ('david.martinez@aulab.es')->send (
                new ContactNotification (
                    $request->name,
                    $request->email,
                    $request->description
                )
        );
        return redirect ()->route ('inicio');

    }
}
