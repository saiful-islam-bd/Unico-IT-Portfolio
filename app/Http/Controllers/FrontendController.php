<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\about_us;
use App\Models\bg_banner;
use App\Models\why_us;
use App\Models\service;
use Illuminate\support\Facades\File;

class FrontendController extends Controller
{
    public function index()
    {
        $about_us = about_us::where('title', 'About Us')->get();
        $bg_banner = bg_banner::latest('id')->get();
        $bg_banner_two=bg_banner::orderby('id','asc')->get();
        // $why_us = why_us::where('title', 'Why Us!')->get();
        $why_us = why_us::where('id', 'asc')->limit(6)->get();
        $why_us = why_us::paginate(4);
        // $service = service::where('title', 'Software')->get();
        $service = service::where('id', 'asc')->limit(6)->get();
        $service = service::paginate(20);
        return view('welcome', compact('about_us', 'bg_banner', 'why_us','service','bg_banner_two'));
    }
    public function service($title)
    {
        $services = service::where('title', $title)->get();

        return view('pages.service.service',compact('services'));
       
    }
}
