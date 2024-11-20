<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allblog;
use Illuminate\Support\Facades\Auth;



class AllblogController extends Controller
{
    public function index()
    {
        $allblog=Allblog::all();
        return view("pages.backend.all-blog.index",["allblog"=>$allblog]);
        
    }


    public function create()
    {
        $allblog=Allblog::all();
        return view("pages.backend.all-blog.create",["allblog"=>$allblog]);
    }


    public function store(Request $request){
        $allblog=new Allblog; 
        $allblog->user_id=Auth::user()->id;
        $allblog->title=$request->txtTitle;
        $allblog->meta_title=$request->txtMetaTitle;
        $allblog->slug=$request->txtSlug;
        $allblog->description=$request->txtDescription;
        $allblog->published_date=$request->txtPublishedDate;
        $allblog->seo_title=$request->txtSeoTitle;
        $allblog->seo_description=$request->txtSeoDescription;

        if(isset($request->file_blog_img)){
            $blog_imgName = time().(rand(100,1000)).'.'.$request->file_blog_img->extension();
            $allblog->blog_img=$blog_imgName;
            $allblog->update();
            $request->file_blog_img->move(public_path('img'),$blog_imgName);
        }

        if(isset($request->file_banner_img)){
            $banner_imgName = time().(rand(100,1000)).'.'.$request->file_banner_img->extension();
            $allblog->banner_img=$banner_imgName;
            $allblog->update();
            $request->file_banner_img->move(public_path('img'),$banner_imgName);
        }
        $allblog->save();        
        return back()->with('success','Created Successfully.');
          
    }


    public function edit($id){
        $allblog=Allblog::find($id);    
        return view("pages.backend.all-blog.edit",["allblog"=>$allblog]);
		
	}



    public function update(Request $request,$id){
        $allblog = Allblog::find($id);

        if(isset($request->txtTitle)){
        $allblog->title=$request->txtTitle;
        }

        if(isset($request->txtMetaTitle)){
        $allblog->meta_title=$request->txtMetaTitle;
        }

        if(isset($request->txtSlug)){
        $allblog->slug=$request->txtSlug;
        }

        if(isset($request->txtDescription)){
        $allblog->description=$request->txtDescription;
        }

        if(isset($request->txtPublishedDate)){
        $allblog->published_date=$request->txtPublishedDate;
        }

        if(isset($request->txtSeoTitle)){
        $allblog->seo_title=$request->txtSeoTitle;
        }

        if(isset($request->txtSeoDescription)){
        $allblog->seo_description=$request->txtSeoDescription;
        }

        if(isset($request->file_blog_img)){
            $blog_imgName = (rand(100,1000)).'.'.$request->file_blog_img->extension();
            $allblog->blog_img=$blog_imgName;
            $request->file_blog_img->move(public_path('img'),$blog_imgName);
        }

        if(isset($request->file_banner_img)){
            $banner_imgName = (rand(100,1000)).'.'.$request->file_banner_img->extension();
            $allblog->banner_img=$banner_imgName;
            $request->file_banner_img->move(public_path('img'),$banner_imgName);
        }

        $allblog->update();
        return redirect()->back()
        ->with('success',' Updated successfully'); 
                    
    }


    public function destroy(Request $request){  
        $allblogid=$request->input('d_allblog');
		$allblog= Allblog::find($allblogid);
		$allblog->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
