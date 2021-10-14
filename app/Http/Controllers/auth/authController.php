<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use App\Models\customer;

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
                session(['success_login' => true]);                   //mengaktifkan session
                $request->session()->put('data',$request->input());   //untuk menyimpan data dalam session
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

    public function signup(Request $request)
    {
        
        $customer = new customer;
        $customer->email = $request->email;
        $customer->nama = $request->nama;
        $customer->alamat = $request->alamat;
        $customer->tlp = $request->notelp;
        $customer->noktp = $request->noktp;
        // $customer->fotoktp = $request->fotoktp;
        // $customer->fotobersamaktp = $request->fotobersamaktp;
        $customer->save();

        $users = new user;
        $users->name = $request->nama;
        $users->email = $request->email;
        $users->password = $request->password1;
        // $users->remember_token = $request->remember_token;
        $users->save();


        return redirect('/');
    }
}
