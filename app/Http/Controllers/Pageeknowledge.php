<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pageeknowledge extends Controller
{
    public function index()
    {
        return view('eknowledge.index');
    }

	public function create()
    {
        return view('eknowledge.create');
    }

    public function show($name)
      {
          return view('eknowledge.show');

      }
}
