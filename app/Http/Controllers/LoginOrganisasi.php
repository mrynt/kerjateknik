<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Models\User;
use App\Models\OrganisasiProfile;
use Illuminate\Support\Facades\Hash;
use Auth;

class LoginOrganisasi extends Controller
{
    public function index()
    {
        return view('organisasilogin');
    }


    public function daftar()
    {
        return view('organisasidaftar');
    }


    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

      // dd($request->input());

        $user=User::create([
            'name' => $request->input('nama_depan').' '.$request->input('nama_belakang'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
                    ]);
        $user->assignRole('organisasi');
        $user->organisasiprofile()->create([
                                 'user_id'    => $user->id,
                                  'nama_depan' => $request->input('nama_depan'),
                                  'nama_belakang' => $request->input('nama_belakang'),
                                  'email_perusahaan' => $request->input('email'),
                                  'no_telp' => $request->input('no_whatsapp'),
                                  'alamat' => $request->input('alamat'),
                                  'nama_perusahaan' => $request->input('nama_organisasi_perusahaan'),
                                  'tipe' => $request->input('tipe'),
                                 ]);
        $user->save();

        if($user){
            if (auth()->guard('web')->attempt($request->only('email', 'password'))) {

                $user = Auth::user();
                
                if ($user->roles->pluck( 'name' )->contains( 'organisasi' )) {
                    return redirect('dashboard');
                }

                
            }
        }

    }



    public function actionlogin(Request $request)
    {
       
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);


        if (auth()->guard('web')->attempt($request->only('email', 'password'))) {
            
            $user = Auth::user();
           // dd($user->roles->pluck( 'name' )->contains( 'organisasi' ));
            if ($user->roles->pluck( 'name' )->contains( 'organisasi' )) {
                return redirect('organisasi/dashboard');
            }

           // return redirect('dashboard');
        } else {
           

            return redirect()
                ->back()
                ->withInput()
                ->withErrors(["Incorrect user login details!"]);
        }

       
    }


}
