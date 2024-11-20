<?php

namespace App\Http\Controllers;

use App\Models\Resume;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class ResumeController extends Controller
{
    public function index()
    {
        $resume=Resume::all();
        return view("pages.backend.resume.index",["resume"=>$resume]);
    }


    public function store(Request $request){
        $resume = new Resume; 
        $resume->name=$request->txtName;
        $resume->email=$request->txtEmail;
        $resume->subject=$request->txtSubject;
        $resume->phone=$request->txtPhone;
        $resume->message=$request->txtMessage;

        if(isset($request->fileAttach)){
            $attach_fileName = time().(rand(100,1000)).'.'.$request->fileAttach->getClientOriginalExtension();
			$resume->attach_file=$attach_fileName;
			$request->fileAttach->move(public_path('img'),$attach_fileName);
		}

        $resume->save();
        //return $request;
       return back()->with(["msg"=>'Your CV has been uploded Successfully!']);
    }

    
    public function destroy(Request $request){  
        $resumeid=$request->input('d_resume');
		$resume= Resume::find($resumeid);
		$resume->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
