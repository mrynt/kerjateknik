<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\UserProfile;
use App\Models\OrganisasiProfile;
use Illuminate\Support\Facades\Auth;

class DashboardUserController extends Controller
{
      public function index()
    {   
        $profesional_account = UserProfile::where('is_profesional_akun','=','1')->get();

        $organisasi = OrganisasiProfile::get();
       
        return view('user_view.homepage',compact('profesional_account','organisasi'));
    }
}
