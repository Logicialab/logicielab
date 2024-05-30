<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreContactRequest;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        return view('frontend.contact');
    }

    public function store(StoreContactRequest $request){

        $contacts = new Contact();
        $contacts->first_name = $request->first_name;
        $contacts->last_name = $request->first_name;
        $contacts->phone = $request->phone;
        $contacts->email = $request->email;
        $contacts->subject = $request->subject;
        $contacts->description = $request->description;
        $contacts->save();

        return redirect()->back()->with('success', 'Message sent successfully!');

    }
}
