<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Requests\Login;
class Usercontroller extends Controller
{
    public function login(Login $request){
            
        $request->validated([
                


        ]);
        if (Auth::atempt($request->validated())){
            $request->session()->regenerate();
            return redirect()->intended();
        }
    }
    public function authentificate(Login $request){
            
    

    }
    //
}
