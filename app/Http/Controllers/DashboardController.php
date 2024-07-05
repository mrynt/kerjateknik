<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\UserProfile;
use App\Models\OrganisasiProfile;
use App\Models\Feed;
use Auth;

class DashboardController extends Controller{

    public function __construct() {
        $this->middleware('auth');
      }


      public function index()
    {   
        
		
		
        if(Auth::User()->roles()->first()->name == 'organisasi'){
            $profesional_account = false;
            $organisasi = OrganisasiProfile::get();
       
            
        }else{
            $profesional_account = UserProfile::where('is_profesional_akun','=','1')->get();
            $organisasi = OrganisasiProfile::get();
            
        }
		
		
		
		$feed = Feed::with('user')->orderby('created_at','asc')->get();

		
		
		return view('user_view.homepage',compact('profesional_account','organisasi','feed'));
      
        
    }
}
