<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Type;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    
    public function index()
    {
        $types = Type::all();
        return view('contact', compact('types'));
    }

    public function contactIndex()
    {
        $types = Type::all();
        $contacts = Contact::all();
        return view('admin.contactIndex', compact('types' , 'contacts'));
    }


    public function store(Request $request)
    {

        $contact = Contact::create([
            'username' => $request->username,
            'email' => $request->email,
            'phone' => $request->phone,
            'message' => $request->message,
        ]);
        return redirect()->back()->with('success', 'تم ارسال رسالتك سيتم التواصل معك');
    }

    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
