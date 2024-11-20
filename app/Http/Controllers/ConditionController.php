<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use App\Models\Condition;
use Request;

class ConditionController extends Controller
{
    public function index()
    {
        $condition=Condition::all();
        //   dd($condition);
        return view("pages.backend.terms-condition.index",["condition"=>$condition]);
    }


    public function edit($id){
        $condition=Condition::find($id);
        return view("pages.backend.terms-condition.index",["condition"=>$condition]);	
    }

    public function update(Request $request,$id){
        $condition = Condition::find($id);

        if(Request::has('txtTitle')){
            $condition->title=strval(Request::input('txtTitle'));
        }

        if(Request::has('txtHeading')){
            $condition->heading=strval(Request::input('txtHeading'));
        }
        
        if(Request::has('txtDetails')){
            $condition->details=strval(Request::input('txtDetails'));
        }
        
        
        if(Request::hasFile('image')){
            $file = Request::file('image');
            $imageName = time().(rand(100,1000)).'.'.$file->extension();
            $condition->image=$imageName;
            $file->move(public_path('img'), $imageName);
        }

        $condition->update();
        return redirect()->back()
        ->with('success',' Updated successfully');   
    }
}
