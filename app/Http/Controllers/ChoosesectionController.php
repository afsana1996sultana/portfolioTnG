<?php

namespace App\Http\Controllers;
use App\Models\Choosesection;
use Illuminate\Http\Request;

class ChoosesectionController extends Controller
{
    public function index()
    {
        $choosesection=Choosesection::all();
        //   dd($choosesection);
        return view("pages.backend.choosesection.index_choosesection",["choosesection"=>$choosesection]);
    }

    public function store(Request $request){
        $choosesection=new Choosesection;
        $choosesection->sn=$request->txtSn; 
        $choosesection->title=$request->txtTitle;
        $choosesection->detail=$request->txtDetail;
        $choosesection->icon=$request->txtIcon;
       
        $choosesection->save();     
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$choosesection=Choosesection::find($id);
		return response()->json([
			'status'=>200,
			'choosesection'=>$choosesection
		]);
	}


    public function update(Request $request){
        //	$choosesection->update($request->all());
            $choosesectionid=$request->input('cmbChoosesectionId');
            $choosesection = Choosesection::find($choosesectionid);
            $choosesection->id=$request->cmbChoosesectionId;
            $choosesection->sn=$request->txtSn; 
            $choosesection->title=$request->txtTitle;
            $choosesection->detail=$request->txtDetail;
            $choosesection->icon=$request->txtIcon;
            
            $choosesection->update();
            return redirect()->back()
            ->with('success',' Updated successfully');   
    }

    public function destroy(Request $request){  
        $choosesectionid=$request->input('d_choosesection');
		$choosesection= Choosesection::find($choosesectionid);
		$choosesection->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
