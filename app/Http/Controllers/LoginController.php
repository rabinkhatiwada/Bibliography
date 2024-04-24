<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {

        if($request->getMethod()=="POST"){
            if(Auth::attempt(['email'=>$request->email,'password'=>$request->password],false)){
                return redirect()->route('admin.msg');
            }else{
                return redirect()->back()->with('error','Invalid Credentials');
            }
        }else{

            return view('admin.adminlogin',[
                'pageTitle' => 'Login',
                'formTitle' => 'Admin Login',
                'buttonText' => 'Login',
                'isRegister' => false,
            ]);
        }
    }
    public function register(Request $request)
    {

        if($request->getMethod()=="POST"){
            $request->validate([
                'email' => 'required|email|unique:users',
                'password' => 'required|confirmed|min:8',
            ]);
            $user=new User();
            $user->name=$request->name??"";
            $user->email=$request->email;
            $user->password=bcrypt($request->password);
            $user->save();
            Auth::login($user);

        }else{
            return view('admin.adminlogin',[
                'pageTitle' => 'Register',
                'formTitle' => 'Admin Register',
                'buttonText' => 'Register',
                'isRegister' => true,
            ]);
        }

    }

    public function logout(Request $request)
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
