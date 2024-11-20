<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Ourclient;
use App\Models\Allblog;
use App\Models\User;

class BlogdetailController extends Controller
{
    public function blog_details(Request $request){

        $data['blogData'] = Allblog::where('allblogs.slug',$request->slug)
        ->join('users','users.id', '=', 'allblogs.user_id')
        ->select('users.name', 'allblogs.*')
        ->first();
        
        $data['allblog'] = Allblog::select('id', 'user_id', 'title', 'slug', 'description', 'published_date', 'blog_img', 'banner_img')->get();
        
        $data['client'] = Ourclient::select('id', 'c_name', 'logo_img')->get();

        return view('frontend.blog-details.index', $data);

    }
}
