<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LoginController extends Controller
{
    public function show(){
        return view('login.show');
    }


    public function login(Request $request){
        $login=$request->email ;
        $password=$request->password;
        $credentials=['email'=>$login , 'password'=>$password];
     
        if(Auth::guard('responsable')->attempt($credentials)){
            // dd(Auth()->guard('responsable')->user()->email);
            $request->session()->regenerate();
            return redirect()->route('local.home')->with('succes','vous etes bien connecte'.$login);

        }else{
            return back()->withErrors([
                'email'=>'login ou password incorrect'
            ]);
        }

    
}


    public function logout(Request $request ){
        
        // Session::flush();
        // Auth::logout();
        // return redirect()->route('login');
    
        Auth::guard('responsable')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login.show');
    }

        
    }

 


