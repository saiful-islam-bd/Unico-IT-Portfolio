<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, ValidatesRequests;

    // about page
    public function about()
    {
        return view('pages.about.about');
    }
    public function contact()
    {
        return view('pages.about.contact');
    }
    public function software()
    {
        return view('pages.service.software');
    }
    public function website()
    {
        return view('pages.service.website');
    }
    public function graphics()
    {
        return view('pages.service.graphics');
    }
    public function seo()
    {
        return view('pages.service.seo');
    }
    public function social()
    {
        return view('pages.service.social');
    }
    public function content()
    {
        return view('pages.service.content');
    }
    public function onlinebranding()
    {
        return view('pages.service.onlinebranding');
    }
    public function analysis()
    {
        return view('pages.service.analysis');
    }

}

