<?php

namespace App\Http\Controllers;
use App\about;

use Illuminate\Http\Request;
use App\Http\Requests\about\createAboutRequest;
use App\Http\Requests\about\updateAboutRequest;
use Illuminate\Support\Facades\Storage;

class aboutsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //redirecting to about index
        return view('about.index')->with('abouts', about::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //redirecting to about create form
        return view('about.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createAboutRequest $request)
    {
    
        //uploading the image
        if($request->hasfile('image')){
            $image=$request->image->store('abouts');
        }
        else{
            $image='';
        }
       //Inserting Fields from Form
      
       about::create([
           'title'=>$request->title,
           'category'=>$request->category,
           'description'=>$request->description,
           'image'=>$image,
           'sort'=>$request->sort
       ]);
      
       //sent a sucessfully addition message 
       session()->flash('success','New About has been Added Successfully');
       //redirecting to the index page
       return redirect(route('abouts.index'));
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
    public function edit(about $about)
    {
        //redirecting to create form for Editing purpose
        return view('about.create')->with('about',$about);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateAboutRequest $request, about $about)
    {
        //

        //checking that if image has changed
        if($request->hasfile('image')){
            $image=$request->image->store('abouts');
            Storage::delete($about->image);
        }
        {
            $image='';
        }
         
        //updating the record usign update method
        $about->update([
            'title'=>$request->title,
            'category'=>$request->category,
            'description'=>$request->description,
            'image'=>$image,
            'sort'=>$request->sort
        ]);

        session()->flash('success','About has been updated successfully');
        return redirect(route('abouts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(about $about)
    {
        //
         //Deleting Record which is goted by javascript code
         $about->delete();
         Storage::delete($about->image);
 
         session()->flash('success','This About has been delete sucessfully');
         return redirect(route('abouts.index'));
    }
}
