<?php

namespace App\Http\Controllers;

use App\Practice;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class PracticesController extends Controller
{

    public function index(){
        $title = 'Practices';
        $practices = Practice::all();

        return view('practices.index', compact('title', 'practices'));
    }

    public function show($id){
        $practice = Practice::find($id);
        $title = $practice->title;
        $activity = 'activities.'. $practice->title;
        return view('practices.show', compact('title', 'practice', 'activity'));
    }
}
