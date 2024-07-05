<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ProfileUserController extends Controller
{
      public function index()
    {   
  
        return view('user_view.profile');
    }
}
