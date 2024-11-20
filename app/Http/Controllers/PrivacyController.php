<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Privacy;
use Request;

class PrivacyController extends Controller
{
    public function index()
    {
        $privacy=Privacy::all();
        //   dd($privacy);
        return view("pages.backend.privacy-policy.index",["privacy"=>$privacy]);
    }


    public function edit($id){
        $privacy=Privacy::find($id);
        return view("pages.backend.privacy-policy.index",["privacy"=>$privacy]);	
    }

    public function update(Request $request,$id){
        $privacy = Privacy::find($id);

        if(Request::has('txtTitle')){
            $privacy->title=strval(Request::input('txtTitle'));
        }

        if(Request::has('txtHeading')){
            $privacy->heading=strval(Request::input('txtHeading'));
        }
        
        if(Request::has('txtDetails')){
            $privacy->details=strval(Request::input('txtDetails'));
        }
        
        
        if(Request::hasFile('image')){
            $file = Request::file('image');
            $imageName = time().(rand(100,1000)).'.'.$file->extension();
            $privacy->image=$imageName;
            $file->move(public_path('img'), $imageName);
        }

        $privacy->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }
}
