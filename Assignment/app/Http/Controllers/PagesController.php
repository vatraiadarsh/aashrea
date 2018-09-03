<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        return view('pages.index');
    }
    public function contactUs()
    {
        return view('pages.contact-us');
    }
    public function aboutUs()
    {
        return view('pages.about-us');
    }
    public function courses()
    {
        return view('pages.courses');
    }
    public function collegeInfo()
    {
        return view('pages.college-info');
    }
    public function staffs()
    {
        return view('pages.staffs');
    }
    public function currentStudent()
    {
        return view('pages.current-student');
    }
    public function pathways()
    {
        return view('pages.pathways');
    }


}
