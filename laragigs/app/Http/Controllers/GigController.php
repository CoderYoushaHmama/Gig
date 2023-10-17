<?php

namespace App\Http\Controllers;

use App\Http\Requests\EditGigRequest;
use App\Http\Requests\GigRequest;
use App\Models\Gig;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class GigController extends Controller
{
    //create gig function
    public function create(GigRequest $request){
        $user = Auth::guard('user')->user();
        $fileName = time().'.'.$request->logo->extension();
        $request->logo->move(public_path('gigs_images'),$fileName);
        Gig::create([
            'user_id'=>$user->id,
            'company_name'=>$request->company_name,
            'job_title'=>$request->job_title,
            'job_location'=>$request->job_location,
            'contact_email'=>$request->contact_email,
            'website'=>$request->website,
            'tags'=>$request->tags,
            'logo'=>$fileName,
            'description'=>$request->description
        ]);
        return redirect()->route('listing');
    }

    //search function
    public function search(Request $request){
        $search = request('search');
        if(!$search){
            return redirect()->back();
        }
        $gigs = Gig::where('job_title','like','%'.$search.'%')->get();
        return redirect()->back()->with('search_result',$gigs);
    }

    //search tag function
    public function search_tag($tag){
        $gigs = Gig::where('tags','like','%'.$tag.'%')->get();
        return redirect()->back()->with('search_result',$gigs);
    }

    //get gigs by tag function
    public function tag($tag){
        $user = Auth::guard('user')->user();
        $gigs = Gig::where('tags', 'like', '%' . $tag . '%')->get();

        if($user) {
            return redirect()->route('listing')->with('search_result', $gigs);
        }
        return redirect()->route('visitor')->with('search_result',$gigs);
    }

    //delete gig function
    public function delete($gig){
        $gig = Gig::find($gig);
        if (File::exists(public_path('gigs_images/'.$gig->logo))) {
            File::delete(public_path('gigs_images/'.$gig->logo));
        }
        $gig->delete();
        return redirect()->back()->with('success','Gig Deleted Successfully');
    }

    //edit gig function
    public function edit($gig,EditGigRequest $request){
        $user = Auth::guard('user')->user();
        $gig = Gig::find($gig);

        $gig->update([
            'user_id'=>$user->id,
            'company_name'=>$request->company_name,
            'job_title'=>$request->job_title,
            'job_location'=>$request->job_location,
            'contact_email'=>$request->contact_email,
            'website'=>$request->website,
            'tags'=>$request->tags,
            'description'=>$request->description
        ]);

        if($request->logo){
            $fileName = time().'.'.$request->logo->extension();
            if (File::exists(public_path('gigs_images/'.$gig->logo))) {
                File::delete(public_path('gigs_images/'.$gig->logo));
            }
            $request->logo->move(public_path('gigs_images'),$fileName);
            $gig->update([
                'logo'=>$fileName
            ]);
//            $request->logo->move(public_path('gigs_images'),$fileName);
        }
        return redirect()->route('listing.manage.gig')->with('success','Gig Edited Successfully');
    }
}
