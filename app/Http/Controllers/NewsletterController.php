<?php

namespace App\Http\Controllers;

use App\Models\Newsletter;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;

class NewsletterController extends Controller
{
    public function index()
    {
        $newsletter=Newsletter::all();
        return view("pages.backend.newsletter.index_newsletter",["newsletter"=>$newsletter]);
    }
    
    public function store(Request $request){
        $newsletter = new Newsletter; 
        $newsletter->email=$request->txtEmail;

        $newsletter->save();
        //return $request;
        return back()->with(["msg"=>'Your Newsletter has been send Successfully!']);
    }
  
    
    public function show($id){
		$newsletter=Newsletter::find($id);
		return response()->json([
			'status'=>200,
			'newsletter'=>$newsletter
		]);
	}
    

    public function destroy(Request $request){  
        $newsletterid=$request->input('d_newsletter');
		$newsletter= Newsletter::find($newsletterid);
		$newsletter->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
