<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ContactRequest;

class ContactRequestController extends Controller
{
     public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            // 'number' => 'required|numeric',
             'number' => 'required|digits:10',
            'event' => 'nullable|string',
            'eventdate' => 'nullable|date',
            'address' => 'required|string',
        ]);

        ContactRequest::create($request->all());

        return redirect()->back()->with('success', 'Your message has been sent!');
    }

    public function ContactList()
    {
        $contacts = ContactRequest::latest()->get();
        return view('backend.admin.contactlist', compact('contacts'));
    }


    public function show($id)
{
    $contact = ContactRequest::findOrFail($id);
    return view('admin.contact.show', compact('contact'));
}


public function destroy($id)
{
    $contact = ContactRequest::findOrFail($id);
    $contact->delete();

    return redirect()->back()->with('success', 'Contact request deleted successfully.');
}

}
