<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function welcome()
    {
        $title = 'Welcome';
        return view('welcome', compact('title'));
    }

    public function about()
    {
        $title = 'About';
        $name = 'you.';
        return view('pages.about', compact('title','name'));
    }

    public function contact()
    {
        $title = 'Contact';
        $name = 'Stark';
        return view('pages.contact', compact('title','name'));
    }

     public function practices()
    {
        $title = 'Pratices';
        $name = 'anonymous';
        return view('pages.practices', compact('title','name'));
    }
}
