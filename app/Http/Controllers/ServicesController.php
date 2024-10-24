<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{

    public function index()
    {
        return view('frontend.services');
    }


    public function mobileAppDesign()
    {
        return view('frontend.services.mobile-app-design');
    }


    public function webDesign()
    {
        return view('frontend.services.web-design');
    }


    public function technicalAnalysis()
    {
        return view('frontend.services.technical-analysis');
    }


    public function designServices()
    {
        return view('frontend.services.design-services');
    }



    public function softwareTesting()
    {
        return view('frontend.services.software-testing');
    }


    public function serverManagement()
    {
        return view('frontend.services.server-management');
    }


    public function webHosting()
    {
        return view('frontend.services.web-hosting');
    }


    public function dedicatedServer()
    {
        return view('frontend.services.dedicated-server');
    }



    public function projectManagement()
    {
        return view('frontend.services.project-management');
    }



    public function technicalSupport()
    {
        return view('frontend.services.technical-support');
    }



    public function digitalMarketing()
    {
        return view('frontend.services.digital-marketing');
    }
}
