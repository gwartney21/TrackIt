<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class jobsController extends Controller
{

    public function __construct()
    {
      $this->middleware('auth');
    }

    public function index(){
        return view('dashboardMain');
    }


    public function store(Request $request)
    {

        $request->user()->jobs()->create([
            'JobName' => $request->JobName,
            'JobRole' => $request->JobRole,
            'JobLink' => $request->JobLink,
            'JobInfo' => $request->JobInfo
        ]);

        
      

        return redirect('/');
    }
}
