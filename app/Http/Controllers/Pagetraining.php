<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagetraining extends Controller
{
    public function index()
    {
        return view('training.index');
    }

	public function create()
    {
        return view('training.create');
    }
	
	public function show($name)
    {       
        return view('training.show');
        
    }
}
