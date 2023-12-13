<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //guidance
    public function guidance()
    {
        return view('dashboard');
    }
    // schedule
    public function addschedule()
    {
        return view('admin.addschedule');
    }
    public function schedule()
    {
        return view('admin.schedule');
    }
    // Srecord
    public function addrecord()
    {
        return view('admin.addrecord');
    }
    public function record()
    {
        return view('admin.record');
    }
    //scholar
    public function addscholar()
    {
        return view('admin.addscholar');
    }
    public function scholar()
    {
        return view('admin.scholar');
    }
    //evaluation
    public function evaluation()
    {
        return view('admin.evaluation');
    }
    public function teacher()
    {
        return view('admin.teacher-records');
    }

    //studentinfo
    public function student()
    {
        return view('admin.studentinfo');
    }
}
