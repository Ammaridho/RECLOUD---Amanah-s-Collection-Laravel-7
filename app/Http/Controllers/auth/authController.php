<?php

namespace App\Http\Controllers\auth;

use App\Models\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class authController extends Controller
{
    public function ceklogin(Request $request)
    {
        $email = $request->email;
        $password = $request->password;

        $data = User::where('email',$request->email)->first();
        if($data){
            if($request->password == $data->password){
                session(['success_login' => true]);
                return redirect('/');
            }
        }
        return redirect('/');
    }
    
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }
}
