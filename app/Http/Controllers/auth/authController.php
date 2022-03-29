<?php

namespace App\Http\Controllers\auth;

use App\Models\User;
use App\Models\customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class authController extends Controller
{
    public function ceklogin(Request $request)
    {
        $data = User::where('email',$request->email)->first();
        if($data){
            if(\Hash::check($request->password, $data->password)){
                session(['success_login' => true]);                   //mengaktifkan session
                $request->session()->put('data',$request->input());   //untuk menyimpan data dalam session
                return redirect('/');
            }
        }
        return redirect('/')->with('message','Id atau Password salah!');
    }
    
    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect('/');
    }

    public function signup(Request $request)
    {
        // dd($request);

        $validatedData = $request->validate([   
            'email' => 'required|max:50|email',
            'password1' => 'required',
            'password2' => 'required',
            'nama' => 'required|max:50',
            'alamat' => 'required|max:100',
            'kodepos' => 'required|max:10',
            'notelp' => 'required|max:25',
            'noktp' => 'required|max:25',
            'fotoKtp' => 'required|mimes:jpeg,png,jpg|max:10000',
            'fotoBersamaKtp' => 'required|mimes:jpeg,png,jpg|max:10000'
        ]);

        // dd($request);
        // foto ktp =================================
            // membuat nama foto ktp agar tidak sama
            $namafotoKtp = $request->email . '-' . time() . '-' . 'ktp' . '.' .  $request->fotoKtp->extension();

            // memasukkan ke folder
            $request->fotoKtp->move(public_path('img/foto'), $namafotoKtp);

        // foto bersama ktp =================================
            // membuat nama foto bersama ktp agar tidak sama
            $namafotoBersamaKtp = $request->email . '-' . time() . '-' . 'bersamaktp' . '.' . $request->fotoBersamaKtp->extension();

            // memasukkan ke folder
            $request->fotoBersamaKtp->move(public_path('img/foto'), $namafotoBersamaKtp);

            // dd($request);
        
        $customer = new customer;
        $customer->nama = $request->nama;
        $customer->tlp = $request->notelp;
        $customer->email = $request->email;
        $customer->alamat = $request->alamat;
        $customer->kodepos = $request->kodepos;
        $customer->nomorktp = $request->noktp;
        $customer->fotoktp = $namafotoKtp;
        $customer->fotobersamaktp = $namafotoBersamaKtp;
        $customer->save();

        $users = new user;
        $users->name = $request->nama;
        $users->email = $request->email;
        $users->password = bcrypt($request->password1);
        $users->remember_token = Str::random(100);
        $users->save();


        return redirect('/')->with('success','Berhasil Sign Up');;
    }
}
