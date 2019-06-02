<?php

namespace App\Http\Controllers;
use App\contact;

use Illuminate\Http\Request;

use App\Http\Requests\contacts\createContactsRequest;
use App\Http\Requests\contacts\updateContactRequest;
use Illuminate\Support\Facades\Storage;

class contactsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //rediecting to contact index page
        return view('contacts.index')->with('contacts', contact::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //redirecting to  contacts creating form
        return view('contacts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createContactsRequest $request)
    {
        //
        contact::create([
            'campus'=>$request->campus,
            'map'=>$request->map,
            'address'=>$request->address,
            'number'=>$request->number,
            'email'=>$request->email,
            'sort'=>$request->sort
        ]);
       
        //sent a sucessfully addition message 
        session()->flash('success','New Contact has been Added Successfully');
        //redirecting to the index page
        return redirect(route('contacts.index'));
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(contact $contact)
    {
        //redirecting to create form editig purpose
        return view('contacts.create')->with('contact', $contact);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateContactRequest $request, contact $contact)
    {
        //

             //updating the record usign update method
             $contact->update([
                'campus'=>$request->campus,
                'map'=> $request->map,
                'address'=> $request->address,
                'number'=> $request->number,
                'email'=> $request->email,
                'sort'=>$request->sort
            ]);
    
            session()->flash('success','Contact has been updated successfully');
            return redirect(route('contacts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(contact $contact)
    {
        //
        $contact->delete();

        session()->flash('success','Contact has been deleted sucessfully');
        return redirect(route('contacts.index'));
    }
}
