<?php

namespace App\Http\Controllers;
use App\gallery;

use Illuminate\Http\Request;
use App\Http\Requests\gallery\createGalleryRequest;
use App\Http\Requests\gallery\updateGalleryRequest;
use Illuminate\Support\Facades\Storage;

class galleryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //rediecting to gallery index
        return view('gallery.index')->with('gallery', gallery::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //redirecting to Create galery Form Page
        return view('gallery.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createGalleryRequest $request)
    {
        //uploading the image
       $image=$request->image->store('gallery');
       $image2=$request->imageicon->store('gallery');
        
       //Inserting Fields from Form
   
       gallery::create([
           'title'=>$request->title,
           'category'=>$request->category,
           'image'=>$image,
           'imageicon'=>$image2,
           'sort'=>$request->sort
       ]);
      
       //sent a sucessfully addition message 
       session()->flash('success','New Image has been Added Successfully');
       //redirecting to the index page
       return redirect(route('gallery.index'));

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
    public function edit(gallery $gallery)
    {
        //
         //opening affilations.crate but for editing
         return view('gallery.create')->with('gallery', $gallery);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateGalleryRequest $request, gallery $gallery)
    {

        //checking that if image has changed
        if($request->hasfile('image')){
            $image=$request->image->store('gallery');
            Storage::delete($gallery->image);
        }

        if($request->hasfile('imageicon')){
            $image2=$request->imageicon->store('gallery');
            Storage::delete($gallery->imageicon);
        }
         
        //updating the record usign update method
        $gallery->update([
            'title'=>$request->title,
            'category'=>$request->category,
            'image'=>$image,
            'imageicon'=>$image2,
            'sort'=>$request->sort
        ]);

        session()->flash('success','Image and Its Details has been updated successfully');
        return redirect(route('gallery.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(gallery $gallery)
    {
        //
           //Deleting Record which is goted by javascript code
           $gallery->delete();
           Storage::delete($gallery->image);
           Storage::delete($gallery->imageicon);
   
           session()->flash('success','Image  has been deleted sucessfully');
           return redirect(route('gallery.index'));
    }
}
