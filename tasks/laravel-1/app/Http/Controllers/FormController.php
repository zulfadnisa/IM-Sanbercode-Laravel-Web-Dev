<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FormController
{
    public function register()
    {
        return view('pages.register');
    }


    public function welcome(Request $request)
    {
        if ($request->isMethod('get') && !$request->filled(['firstname', 'lastname'])) {
            return redirect()->route('register');
        }

        $request->validate([
            'firstname' => 'required',
            'lastname'  => 'required',
        ]);

        $firstname = $request->firstname;
        $lastname = $request->lastname;

        return view('pages.welcome', compact('firstname', 'lastname'));
    }
}
