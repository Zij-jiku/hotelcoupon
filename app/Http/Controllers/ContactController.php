<?php

namespace App\Http\Controllers;

use notify;
use Carbon\Carbon;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('backend.contact.index', [
            'contacts_all' => Contact::all(),
            'contacts_totals' => Contact::count(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'fullname' => 'required',
            'email' => 'required|unique:contacts',
            'messages' => 'required',
        ]);
    
        Contact::insert($request->except('_token') + [
          'created_at' => Carbon::now(),
        ]);
        
        notify()->success('Contact Insert Successfully!!!');
        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view('backend.contact.edit' , [
            'contact_info' => $contact
        ]);
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
        $contact->update($request->except('_token' , '_method'));
        return redirect('/contact')->with('udpate_status' , 'Contact Update Successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        $contact->delete();
        notify()->success('Laravel Notify is awesome!');
        return back();
    }
}
