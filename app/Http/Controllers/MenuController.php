<?php

namespace App\Http\Controllers;

use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menu=Menu::all();
        return view("pages.backend.menu.index_menu",["menu"=>$menu]);
    }

    public function store(Request $request){
        $menu=new Menu; 
        $menu->m_name=$request->txtName;
        $menu->status=$request->txtStatus;
        $menu->serial_no=$request->txtSerialNo;
        $menu->save();
               
        return back()->with('success','Created Successfully.');
          
    }

    
    public function edit($id){
		$menu=Menu::find($id);
		return response()->json([
			'status'=>200,
			'menu'=>$menu
		]);
	}

    public function update(Request $request,Menu $menu){
        $menuid=$request->input('cmbMenuId');
        $menu = Menu::find($menuid);
        $menu->id=$request->cmbMenuId; 
        $menu->m_name=$request->txtName;
        $menu->status=$request->txtStatus;
        $menu->serial_no=$request->txtSerialNo;

        $menu->update();
        return redirect()->back()
        ->with('success',' Updated successfully');
    }

    public function destroy(Request $request){  
        $menuid=$request->input('d_menu');
		$menu= Menu::find($menuid);
		$menu->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}