<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class Contacts extends Controller
{
    public function index (Request $request) {

        $contacts = Contact::paginate(20);

        //$page = $request->input('page');


        return view('index.index', [
            'contacts' => $contacts,
        ]);
    }

    public function edit (Request $request, $contact_id) {

        $contact = Contact::where('id', $contact_id)->first();

        return view('admin.edit', [
            'contact' => $contact,
        ]);
    }

    public function delete (Request $request, $contact_id) {

        Contact::where('id', $contact_id)->delete();

        return redirect()->route('contacts.index');
    }

    public function store (Request $request, $contact_id) {
        $contactInfo = $request->only('firstName', 'lastName', 'reminder', 'email');

        Contact::where('id', $contact_id)->first()->update([
            'first_name' => $contactInfo['firstName'],
            'last_name' => $contactInfo['lastName'],
            'reminder' => $contactInfo['reminder'],
            'contact' => $contactInfo['email'],
        ]);


        return redirect()->route('contacts.index');
    }
}
