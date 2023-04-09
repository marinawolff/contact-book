<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index () {
        $first_name = "Contacts";
        $search = request('search');

        if ($search) {
            $contacts = Contact::where('first_name', 'like', "%{$search}%")
                                ->orWhere('last_name', 'like', "%{$search}%")
                                ->get();
        } else {
            $contacts = Contact::orderBy('last_name')
                                ->get();
        }

        //return view('contacts', ['first_name' => $first_name, 'contacts' => $contacts]);
        return response()->json($contacts, 200);
    }

    public function show ($id) {
        $contact = Contact::find($id); 
        // return view('contact', $contact);
        return response()->json($contact, 200);
    }

    public function create () {
        return view('create', ['title' => 'New Contact']);
    }

    public function store () {
        $contact = new Contact();
        $contact->first_name = request('first_name');
        $contact->last_name = request('last_name');
        $contact->email = request('email');
        $contact->save();

        // return redirect("/contacts/{$contact->id}");
        return response()->json($contact, 201);
    }

    public function edit ($id) {
        $contact = Contact::find($id);

        return view('edit', ['title'=>'Edit Contact', 'contact' => $contact]);
    }

    public function update ($id) {
        $contact = Contact::find($id);
        $contact->first_name = request('first_name');
        $contact->last_name = request('last_name');
        $contact->email = request('email');
        $contact->save();

        // return redirect("/contacts/{$contact->id}");
        return response()->json($contact, 200);
    }

    public function destroy ($id) {
        $contact = Contact::find($id);
        $contact->delete();

        // return redirect('/');
        return response()->json($contact, 200);
    }
}
