<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\about;
use App\header;
use App\announcement;
use App\course;
use App\affiliation;
use App\gallery;
use App\contact;

class showDataController extends Controller
{
    //this function will show Data from all tables
    public function index(){

        return view('index')
        ->with('abouts', about::all())
        ->with('affiliations', affiliation::all())
        ->with('announcements', announcement::all())
        ->with('contacts', contact::all())
        ->with('courses', course::all())
        ->with('gallery', gallery::all())
        ->with('header', header::all());
    }
}
