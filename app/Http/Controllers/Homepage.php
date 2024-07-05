<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class Homepage extends Controller
{
      public function index()
    {
        return view('homepage');
    }
}
