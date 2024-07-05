<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pagevideo extends Controller
{
    public function index()
    {
        return view('video.index');
    }
}
