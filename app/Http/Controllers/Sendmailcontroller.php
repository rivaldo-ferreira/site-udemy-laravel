<?php

namespace App\Http\Controllers;

use App\Mail\Sendmail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class Sendmailcontroller extends Controller
{
    public function lead(Request $request)
    {
        $name = $request->name;
        $tel = $request->tel;
        $email = $request->email;

        $data = [
            'name' => $name,
            'tel' => $tel,
            'email' => $email,
        ];

        Mail::to('artedoriva@gmail.com')->send(new Sendmail($data));
        return redirect()->route('home');
    }
}
