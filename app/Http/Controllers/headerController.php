<?php

namespace App\Http\Controllers;
use App\header;

use Illuminate\Http\Request;
use App\Http\Requests\header\createheaderRequest;
use App\Http\Requests\header\updateheaderRequest;
use Illuminate\Support\Facades\Storage;

class headerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return to header view Dashboard
        return view('header.index')->with('header', header::all());
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //redirect to headers.create page
         return view('header.edit');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createHeaderRequest $request)
    {
        //uploading the image
       $logo=$request->logo->store('header');
        
       //Inserting Fields from Form
       $nheader=new header();
       header::create([
           'title'=>$request->title,
           'slogan'=>$request->slogan,
           'logo'=>$logo,
    
       ]);
      
       //sent a sucessfully addition message 
       session()->flash('success','New Header has been Added Successfully');
       //redirecting to the index page
       return redirect(route('headers.index'));
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
    public function edit(header $header)
    {
        //redirect to Headers.edit form page
        return view('header.edit')->with('header', $header);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateHeaderRequest $request, header $header)
    {
        //checking that if image has changed
        if($request->hasfile('logo')){
            $image=$request->logo->store('header');
            Storage::delete($header->logo);
        }
         
        //updating the record usign update method
        $header->update([
            'title'=>$request->title,
            'slogan'=> $request->slogan,
            'logo'=>$image
          
        ]);

        session()->flash('success','Header has been updated successfully');
        return redirect(route('headers.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
