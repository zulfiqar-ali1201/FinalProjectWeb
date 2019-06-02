<?php

namespace App\Http\Controllers;
use App\announcement;
use Illuminate\Http\Request;
use App\Http\Requests\announcements\createAnnouncementsRequest;
use App\Http\Requests\announcements\updateAnnouncementsRequest;
use Illuminate\Support\Facades\Storage;

class announcementsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //View Posts
        return view('announcements.index')->with('announcements', announcement::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //return to create Annoucnement Form
        return view('announcements.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createAnnouncementsRequest $request)
    {
        //uploading the image
       $image=$request->image->store('announcements');

       //Inserting Fields from Form
       $nAnnouncements=new announcement();
       announcement::create([
           'title'=>$request->title,
           'description'=>$request->description,
           'sort'=>$request->sort,
           'announcedate'=>$request->announcedate,
           'image'=>$image,
           
       ]);

       //sent a sucessfully addition message 
       session()->flash('success','New Annoucement has been Added Successfully');
       //redirecting to the index page
       return redirect(route('announcements.index'));


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
    public function edit(announcement $announcement)
    {
        //redirecting to Announcments.create for updating the recor
        return view('announcements.create')->with('announcement', $announcement);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateAnnouncementsRequest $request, announcement $announcement)
    {
        //checking that if image has changed
        if($request->hasfile('image')){
            $image=$request->image->store('announcements');
            Storage::delete($announcement->image);
        }
         
        //updating the record usign update method
        $announcement->update([
            'title'=>$request->title,
            'description'=>$request->description,
            'sort'=>$request->sort,
            'announcedate'=>$request->announcedate,
            'image'=>$image,
        ]);

         //sent a sucessfully addition message 
       session()->flash('success','Annoucement has been Updated Successfully');
       //redirecting to the index page
       return redirect(route('announcements.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(announcement $announcement)
    {
        //
        //Deleting Record which is goted by javascript code
        $announcement->delete();
        Storage::delete($announcement->image);

        session()->flash('success','Annnouncement has been delete sucessfully');
        return redirect(route('announcements.index'));
    }
}
