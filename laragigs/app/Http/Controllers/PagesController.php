<?php

namespace App\Http\Controllers;

use App\Models\Gig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    //login page
    public function login(){
        $user = Auth::guard('user')->user();
        return view('login',compact('user'));
    }

    //register page
    public function register(){
        $user = Auth::guard('user')->user();
        return view('register',compact('user'));
    }

    //visitor page
    public function visitor(){
        $gigs = Gig::get();
        return view('visitor',compact('gigs'));
    }

    //listing page
    public function listing(){
        $user = Auth::guard('user')->user();
        $gigs = Gig::get();
        return view('listing',compact(['user','gigs']));
    }

    //gig information page
    public function gig($gig_id){
        $user = Auth::guard('user')->user();
        $gig = Gig::find($gig_id);
        if($user){
            return view('post',compact(['user','gig']));
        }
        return view('post_visitor',compact('gig'));
    }

    //create gig page
    public function create(){
        $user = Auth::guard('user')->user();
        return view('create',compact('user'));
    }

    //edit gig page
    public function edit($gig_id){
        $user = Auth::guard('user')->user();
        $gig = Gig::find($gig_id);
        return view('edit',compact(['user','gig']));
    }

    //manage gig page
    public function manage(){
        $user = Auth::guard('user')->user();
        return view('manage',compact('user'));
    }
}
