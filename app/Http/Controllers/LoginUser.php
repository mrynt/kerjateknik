<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\UserProfile;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
class LoginUser extends Controller
{


    public function index()
    {
        return view('userlogin');
    }


    public function daftar()
    {
        return view('register');
    }


    public function postRegister(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);

       // dd($request->input('nama_depan'));

        $user=User::create([
            'name' => $request->input('nama_depan').' '.$request->input('nama_belakang'),
            'email' => $request->input('email'),
            'password' => Hash::make($request->input('password')),
                    ]);
        $user->assignRole('user');
        $user->profile()->create([
                                 'user_id'    => $user->id,
                                  'nama_depan' => $request->input('nama_depan'),
                                  'nama_belakang' => $request->input('nama_belakang'),
                                  'email' => $request->input('email'),
                                  'no_whatsapp' => $request->input('no_whatsapp'),
                                  'tanggal_lahir' => date('Y-m-d',strtotime($request->input('tanggal_lahir'))),
                                  'alamat' => $request->input('alamat'),
                                 ]);
        $user->save();

        if($user){
            if (auth()>attempt($request->only('email', 'password'))) {
                return redirect('dashboard');
            }
        }

    }

    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:5'
        ]);
		

        if (auth()->guard('web')->attempt($request->only('email', 'password'))) {
            
            $user = Auth::user();
                
            if ($user->roles->pluck( 'name' )->contains( 'user' )) {
                return redirect('dashboard');
            }

           // return redirect('dashboard');
        } else {
           

            return redirect()
                ->back()
                ->withInput()
                ->withErrors(["Incorrect user login details!"]);
        }
    }


    public function postLogout()
    {
        auth()->guard('web')->logout();
        session()->flush();

        return redirect()->route('/');
    }

}
