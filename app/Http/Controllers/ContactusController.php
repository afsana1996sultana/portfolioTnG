<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Contactus;
use Request;

class ContactusController extends Controller
{
    public function index()
    {
        $contactus=Contactus::all();
        //   dd($contactus);
        return view("pages.backend.contact-us.index_contactus",["contactus"=>$contactus]);
    }


    public function edit($id){
        $contactus=Contactus::find($id);
        //dd($contactus);
        return view("pages.backend.contact-us.index_contactus",["contactus"=>$contactus]);	
    }

    public function update(Request $request,$id){
        $contactus = Contactus::find($id);

        if(Request::has('txtTitle')){
            $contactus->title=strval(Request::input('txtTitle'));
        }

        if(Request::has('txtHeading')){
            $contactus->heading=strval(Request::input('txtHeading'));
        }
        
        if(Request::has('txtDetails')){
            $contactus->details=strval(Request::input('txtDetails'));
        }
        
        if(Request::has('txtAddress')){
            $contactus->address=strval(Request::input('txtAddress'));
        }
        
        if(Request::has('txtEmail')){
            $contactus->email=strval(Request::input('txtEmail'));
        }
        
        if(Request::has('txtPhone')){
            $contactus->phone=strval(Request::input('txtPhone'));
        }
        
        if(Request::has('txtGoogleMap')){
            $contactus->google_map=strval(Request::input('txtGoogleMap'));
        }

        $contactus->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }
}
