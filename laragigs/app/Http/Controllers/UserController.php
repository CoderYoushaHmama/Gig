<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //register function
    public function register(RegisterRequest $request){

        if($request->password !== $request->confirm_password){
            return redirect()->back()->with('password_error','error in password');
        }
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        if(Auth::guard('user')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('listing');
        }
    }

    //login function
    public function login(LoginRequest $request){
        if(Auth::guard('user')->attempt(['email'=>$request->email,'password'=>$request->password])){
            return redirect()->route('listing');
        }
        return redirect()->back()->with('error','email or password is un correct');
    }

    //logout function
    public function logout(){
        Auth::guard('user')->logout();
        return redirect()->route('visitor');
    }
}
