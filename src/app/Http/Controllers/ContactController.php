<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function confirm(ContactRequest $request)
    {
        $contact = $request->only(["first_name", "last_name", "gender", "email",
        "tel1","tel2","tel3","address","building","choices","contents"]);
        return view('confirm', ['contact' => $contact]);;
    }

    public function store(ContactRequest $request)
    {
        $contact = $request->only(["first_name", "last_name", "gender", "email",
        "tel1","tel2","tel3","address","building","choices","contents"]);
        Contact::create($contact);
        return view('confirm',['contact' => $contact]);;
    }

    public function modify()
    {
        return view('index');;
    }

    public function thanks()
    {
        return view('thanks');;
    }

    public function return()
    {
        return view('index');;
    }
}
