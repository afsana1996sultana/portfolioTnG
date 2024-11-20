<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Allevent;
use Request;

class AlleventController extends Controller
{
    public function index()
    {
        $allevent=Allevent::all();
        //   dd($allevent);
        return view("pages.backend.all-event.index",["allevent"=>$allevent]);
    }


    public function edit($id){
        $allevent=Allevent::find($id);
        return view("pages.backend.all-event.index",["allevent"=>$allevent]);	
    }

    public function update(Request $request,$id){
        $allevent = Allevent::find($id);

        if(Request::has('txtTitle')){
            $allevent->title=strval(Request::input('txtTitle'));
        }

        if(Request::has('txtHeading')){
            $allevent->heading=strval(Request::input('txtHeading'));
        }
        
        if(Request::has('txtDetails')){
            $allevent->details=strval(Request::input('txtDetails'));
        }
        
        
        if(Request::hasFile('image')){
            $file = Request::file('image');
            $imageName = time().(rand(100,1000)).'.'.$file->extension();
            $allevent->image=$imageName;
            $file->move(public_path('img'), $imageName);
        }

        $allevent->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }
}
