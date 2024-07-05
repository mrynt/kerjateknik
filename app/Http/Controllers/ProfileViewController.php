<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserProfile;
use App\Models\OrganisasiProfile;

class ProfileViewController extends Controller
{
    public function index($tipe = NULL,$username)
    {       
        if($tipe == 'organisasi'){
            /* find by username */
            $data = OrganisasiProfile::with('user')->where('username','=',$username)->first();
          
            if($data != null){
                return view('user_view.profile_view',compact('data','tipe'));
            }else{
                redirect('404');
            }

        }else{
            $data = UserProfile::with('user')->where('username','=',$username)->first();
           
            if(!empty($data)){
                return view('user_view.profile_view',compact('data','tipe'));
            }else{
                return redirect('404');
            
            }
        }
        
    }
}
