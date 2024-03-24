<?php

namespace App\Http\Controllers\Contact;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    function ContactPage(){

        return "contact page";
    } //end method


    function ContactStore(Request $request){


        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:contacts|max:255',
            'phone' => 'required|unique:contacts',
            'description' => 'required',
        ],
    
       [
        'name.required'=>"Name is Required",
        'email.required'=>"Email is Required",
        'email.unique'=>"Email Allready exist",
        'phone.required'=>"phone is Required",
        'phone.unique'=>"Phone Allready exist",
        'description.required'=>"description is Required",

        ]);

       $contact = new Contact();
       $contact->name = $request->name;
       $contact->email = $request->email;
       $contact->phone = $request->phone;
       $contact->description = $request->description;
       $contact->save();
       return redirect()->back()->with('msg','contact insert successfully');
    } //end method
}
