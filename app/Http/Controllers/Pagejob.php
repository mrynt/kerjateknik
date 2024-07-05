<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagejob extends Controller
{
    public function index()
    {	
        return view('job.index');
    }
	

	public function create()
    {       
        return view('job.create');
        
    }
	
	public function show($name)
    {       
        return view('job.show');
        
    }
}
