<?php

namespace App\Http\Controllers;

use App\Contact;
use App\PhoneNumber;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class ContactsController extends Controller
{
    public function add()
    {
        $userId = Auth::id();
        return view('add', compact('userId'));
    }

    public function newContact()
    {
        $contact = new Contact();
        $contact->name = request()->name;
        $contact->user_id = Auth::id();
        $contact->tag = request()->tag;
        $contact->save();
        Session::flash('status', 'The contact has been successfully created!');
        return redirect()->route('contact', [$contact]);
    }

    public function show(Contact $contact)
    {
        return view('contact', compact('contact'));
    }

    public function newNumberForm(Contact $contact)
    {
        return view('new-number', compact('contact'));
    }

    public function addNewNumber(Request $request, Contact $contact)
    {
        $number = new PhoneNumber;
        $number->number = $request->number;
        $number->type = $request->type;
        $contact->phoneNumbers()->save($number);
        Session::flash('status', 'The phone number has been successfully added to the contact!');
        return view('contact', compact('contact'));
    }

    public function deleteContact(Contact $contact)
    {
        $contact = Contact::find($contact->id);
        $contact->forceDelete();
        Session::flash('status', $contact->name . ' has been successfully deleted from your Phone Book!');
        return redirect()->to('/home');
    }

    public function editContactForm(Contact $contact)
    {
        return view('editcontact', compact('contact'));
    }

    public function editContactSave(Contact $contact)
    {
        $request = request()->all();
        $request = new Collection($request);
        $request->each(function($item, $key) {
            if (strpos($key, '-') !== false) {
                $explode = explode('-', $key);
                if (is_numeric($explode[0]) && is_string($explode[1])) {
                    $id = $explode[0];
                    $column = $explode[1];
                    $phoneNumber = PhoneNumber::find($id);
                    $phoneNumber->$column = $item;
                    $phoneNumber->save();
                }
            }
        });
        Session::flash('status', 'Your edits have been saved');
        return redirect()->route('contact', [$contact]);
    }

    public function deleteNumber(PhoneNumber $number)
    {
        $number = PhoneNumber::find($number->id);
        $contact = Contact::find($number->contact_id);
        $number->forceDelete();
        Session::flash('status', ' The selected phone number has been successfully deleted');
        return redirect()->route('contact', [$contact]);
    }

}
