<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\Model\User;

class AuthController extends Controller
{
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }

    public function login()
    {
        return view('auth.login');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password'))){
            return redirect('/dashboard');
        }else{
            return redirect('/login');
        }
        
    }

    public function register()
    {
        return view('auth.register');
    }

    public function registersave(Request $request)
    {
        if(!$request->file == null){
            $file = $request->file('file');
            $file_name = $file->getClientOriginalName();
            $file->move('data_file',$file->getClientOriginalName());
        }else{
            $file_name = "not-found.jpg";
        }
        
        //Validasi inputan
        $this->validate($request,[
            'name' => 'required|min:2',
            'email' => 'required|email',
            'password' => 'required|confirmed|min:6'

        ]);
        //simpan ke database
        $user = new User;

        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->avatar = $file_name;

        $user->save();
    
        return redirect('/login')->with('success', 'You are now our member!, Please Login');   
        
    }
}
