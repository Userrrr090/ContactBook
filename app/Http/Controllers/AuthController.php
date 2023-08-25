<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Contact;

class AuthController extends Controller
{
    public function registration () {
        return view('users.registration');
    }

    public function create (Request $request) {
        $userData = $request->only('firstName', 'lastName', 'email', 'reminder');

        Contact::insert([
            'first_name' => $userData['firstName'],
            'last_name' => $userData['lastName'],
            'reminder' => $userData['reminder'],
            'contact' => $userData['email'],
        ]);

        return redirect()->route('contacts.index');
    }
}
