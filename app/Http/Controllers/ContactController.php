<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('/contact');
    }

    public function create()
    {
        return view('/contact');
    }

    public function store()
    {
        $contact = new Contact;
        $contact->name = request('name');
        $contact->email = request('email');
        $contact->phone = request('phone');
        $contact->message = request('message');
        $contact->save();
        return redirect('contact');
    }
}
