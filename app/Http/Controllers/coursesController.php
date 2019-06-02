<?php

namespace App\Http\Controllers;
use App\course;

use Illuminate\Http\Request;
use App\Http\Requests\courses\createCourseRequest;
use App\Http\Requests\courses\updateCourseRequest;
use Illuminate\Support\Facades\Storage;

class coursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //redirecting to Courses Index
        return view('courses.index')->with('courses', course::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //redirecting to Courses Crete form page
        return view('courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createCourseRequest $request)
    {
        //uploading the image
        if($request->hasfile('titleimage')){
            $image=$request->titleimage->store('courses');
        }
       
       //Inserting Fields from Form
      
       course::create([
           'title'=>$request->title,
           'titleimage'=>$image,
           'description'=>$request->description,
           'leads'=>$request->leads,
           'duration'=>$request->duration,
           'category'=>$request->category,
           'contents'=>$request->contents,
           'outcomes'=>$request->outcomes,
           'sort'=>$request->sort
       ]);
      
       //sent a sucessfully addition message 
       session()->flash('success','New Course has been Added Successfully');
       //redirecting to the index page
       return redirect(route('courses.index'));
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
    public function edit(course $course)
    {
        //
          //redirecting to create form for Editing purpose
          return view('courses.create')->with('course',$course);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(updateCourseRequest $request, course $course)
    {
        //
        //checking that if image has changed
        if($request->hasfile('titleimage')){
            $image=$request->titleimage->store('courses');
            Storage::delete($course->titleimage);
        }
        else
        {
            $image='';
        }
         
        //updating the record usign update method
        $course->update([
        'title'=>$request->title,
           'titleimage'=>$image,
           'description'=>$request->description,
           'leads'=>$request->leads,
           'duration'=>$request->duration,
           'category'=>$request->category,
           'contents'=>$request->contents,
           'outcomes'=>$request->outcomes,
           'sort'=>$request->sort
        ]);

        session()->flash('success','Course has been updated successfully');
        return redirect(route('courses.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(course $course)
    {
        //

        //Deleting Record which is goted by javascript code
        $course->delete();
        Storage::delete($course->titleimage);

        session()->flash('success','This Course has been deleted sucessfully');
        return redirect(route('courses.index'));
    }
}
