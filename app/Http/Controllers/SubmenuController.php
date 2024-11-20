<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Submenu;
use App\Models\Menu;
use Illuminate\Http\Request;

class SubmenuController extends Controller
{
    public function index()
    {
        $submenu=Submenu::all();
        $menu=Menu::all();

        $submenu =DB::table('menus')
            ->join('submenus','menus.id', '=', 'submenus.menu_id')
            ->select('menus.m_name', 'submenus.*')
            ->get();
        return view("pages.backend.submenu.index_submenu",["submenu"=>$submenu, "menus"=>$menu]);
    }

    public function store(Request $request){
        $submenu=new Submenu; 
        $submenu->menu_id=$request->txtMenuId;
        $submenu->submenu_name=$request->txtSubmenuName;
        $submenu->status=$request->txtStatus;
        $submenu->save();
               
        return back()->with('success','Created Successfully.');
          
    }

    public function edit($id){
		$submenu=Submenu::find($id);
		return response()->json([
			'status'=>200,
			'submenu'=>$submenu
		]);
	}

    public function update(Request $request,Submenu $submenu){
        $submenuid=$request->input('cmbSubmenuId');
        $submenu = Submenu::find($submenuid);
        $submenu->id=$request->cmbSubmenuId; 
        $submenu->menu_id=$request->txtMenuId;
        $submenu->submenu_name=$request->txtSubmenuName;
        $submenu->status=$request->txtStatus;

        $submenu->update();
        return redirect()->back()
        ->with('success',' Updated successfully');
    }

    public function destroy(Request $request){  
        $submenuid=$request->input('d_submenu');
		$submenu= Submenu::find($submenuid);
		$submenu->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}