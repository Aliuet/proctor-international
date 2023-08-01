<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.index');
    }
    public function desktopSupport()
    {
        return view('frontend.desktop-support');
    }

    public function websiteDesigning()
    {
        return view('frontend.website-designing');
    }

    public function itConsulting()
    {
        return view('frontend.it-consulting');
    }
    public function softwaresSolutions()
    {
        return view('frontend.softwares-solutions');
    }
    public function dataRecovery()
    {
        return view('frontend.data-recovery');
    }
    public function networkSetup()
    {
        return view('frontend.network-setup');
    }

    // Add similar methods for the rest of the services
}
