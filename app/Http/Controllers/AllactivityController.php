<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Allactivity;
use Request;

class AllactivityController extends Controller
{
    public function index()
    {
        $activity=Allactivity::all();
        //   dd($activity);
        return view("pages.backend.all-activity.index",["activity"=>$activity]);
    }


    public function edit($id){
        $activity=Allactivity::find($id);
        return view("pages.backend.all-activity.index",["activity"=>$activity]);	
    }

    public function update(Request $request,$id){
        $activity = Allactivity::find($id);

        if(Request::has('txtTitle')){
            $activity->title=strval(Request::input('txtTitle'));
        }

        if(Request::has('txtHeading')){
            $activity->heading=strval(Request::input('txtHeading'));
        }
        
        if(Request::has('txtDetails')){
            $activity->details=strval(Request::input('txtDetails'));
        }
        
        
        if(Request::hasFile('image')){
            $file = Request::file('image');
            $imageName = time().(rand(100,1000)).'.'.$file->extension();
            $activity->image=$imageName;
            $file->move(public_path('img'), $imageName);
        }

        $activity->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }
}
