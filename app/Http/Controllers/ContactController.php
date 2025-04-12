<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactController extends Controller
{
    public function index()
    {
        $contacts = ContactUs::all();
        return view('contact.view', compact('contacts'));
    }

    public function edit($id)
    {
        $contact = ContactUs::findOrFail($id);
        return view('contact.edit', compact('contact'));
    }

    public function update(Request $request, $id)
    {
        $contact = ContactUs::findOrFail($id);
        $contact->update($request->all());
        return redirect()->route('contact.index')->with('success', 'Contact updated successfully');
    }

    public function destroy($id)
    {
        $contact = ContactUs::findOrFail($id);
        $contact->delete();
        return redirect()->route('contact.index')->with('success', 'Contact deleted successfully');
    }
}