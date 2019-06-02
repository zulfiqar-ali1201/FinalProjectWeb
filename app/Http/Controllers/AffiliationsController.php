<?php

namespace App\Http\Controllers;
use App\affiliation;

use Illuminate\Http\Request;
use App\Http\Requests\affiliations\createAffiliationRequest;
use App\Http\Requests\affiliations\updateAffiliationRequest;
use Illuminate\Support\Facades\Storage;

class AffiliationsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('affiliations.index')->with('affiliations', affiliation::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('affiliations.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createAffiliationRequest $request)
    {
        //uploading the image
       $logo=$request->logo->store('affiliations');
        
        //Inserting Fields from Form
        $nAffiliation=new affiliation();
        affiliation::create([
            'title'=>$request->title,
            'description'=>$request->description,
            'logo'=>$logo,
            'sort'=>$request->sort
        ]);
       
        //sent a sucessfully addition message 
        session()->flash('success','New Affiiiation has been Added Successfully');
        //redirecting to the index page
        return redirect(route('affiliations.index'));
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
    public function edit(affiliation $affiliation)
    {
        //opening affilations.crate but for editing
        return view('affiliations.create')->with('affiliation', $affiliation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateAffiliationRequest $request, affiliation $affiliation)
    {
        //checking that if image has changed
        if($request->hasfile('logo')){
            $image=$request->logo->store('affiliations');
            Storage::delete($affiliation->logo);
        }
         
        //updating the record usign update method
        $affiliation->update([
            'title'=>$request->title,
            'description'=> $request->description,
            'logo'=>$image,
            'sort'=>$request->sort
        ]);

        session()->flash('success','Affiliation has been updated successfully');
        return redirect(route('affiliations.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(affiliation $affiliation)
    {
        //Deleting Record which is goted by javascript code
        $affiliation->delete();
        Storage::delete($affiliation->logo);

        session()->flash('success','Affiliation has been delete sucessfully');
        return redirect(route('affiliations.index'));
    }
}
