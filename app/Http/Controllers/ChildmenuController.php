<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Menu;
use App\Models\Submenu;
use App\Models\Childmenu;
use Illuminate\Http\Request;

class ChildmenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $submenu=Submenu::all();
        $childmenu=Childmenu::all();
        $childmenu =DB::table('submenus')
            ->join('childmenus','submenus.id', '=', 'childmenus.submenu_id')
            ->select('submenus.submenu_name', 'childmenus.*')
            ->get();
        return view("pages.backend.childmenu.index_childmenu",["submenu"=>$submenu, "childmenu"=>$childmenu]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        //dd($request);
        $childmenu=new Childmenu; 
        $childmenu->submenu_id=$request->txtSubMenuId;
        $childmenu->childmenu_name=$request->txtChildmenuName;
        $childmenu->status=$request->txtStatus;
		
        $childmenu->save();     
        return back()->with('success','Created Successfully.');
          
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id){
		$childmenu=Childmenu::find($id);
		return response()->json([
			'status'=>200,
			'childmenu'=>$childmenu
		]);
	}

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,Childmenu $childmenu){
        $childmenuid=$request->input('cmbChildmenuId');
        $childmenu = Childmenu::find($childmenuid);
        $childmenu->id=$request->cmbChildmenuId; 
        $childmenu->submenu_id=$request->txtSubMenuId;
        $childmenu->childmenu_name=$request->txtChildmenuName;
        $childmenu->status=$request->txtStatus;
        $childmenu->update();
        return redirect()->back()
        ->with('success',' Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){  
        $childmenuid=$request->input('d_childmenu');
		$childmenu= Childmenu::find($childmenuid);
		$childmenu->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}