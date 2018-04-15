<?php

namespace App\Http\Controllers\Backend;

use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:admin');
    }

    public function index(){
        $data = Contact::first();
        return view('admin.pages.contact.contact', compact('data'));
    }

    public function edit(Contact $contact){
        $data = Contact::find($contact);
        return view('admin.pages.contact.edit', compact('data', 'contact'));
    }

    public function update(Request $request, $contact)
    {
        $contact = Contact::find($contact);
        $contact->email = $request->email;
        $contact->phone = $request->telephone;
        $contact->address = $request->address;
        $contact->map = $request->google_map;
        $contact->save();
        return redirect('/admin/contact-admin');
    }
}
