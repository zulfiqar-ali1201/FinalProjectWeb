<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\feedback\createFeedbackRequest;
use App\feedback;
use Illuminate\Support\Facades\Storage;

class feedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('feedback.index')->with('feedbacks', feedback::all());
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('index');
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(createFeedbackRequest $request)
    {
        //
        feedback::create([
            'name'=>$request->name,
            'qualification'=>$request->qualification,
            'message'=>$request->message,
            'number'=>$request->number,
            'email'=>$request->email
        
            
        ]);
 
        //sent a sucessfully addition message 
        session()->flash('success','Your FeedBack Successfully Submited to ECIC');
        //redirecting to the index page
        return redirect(route('feedbacks.create'));
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
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
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
