<?php

namespace App\Http\Controllers;

use Illuminate\Pagination\Paginator;
use Illuminate\Http\Request;
use App\Models\Ourclient;
use App\Models\Allblog;

class BlogController extends Controller
{
    public function index()
    {

        $data['client'] = Ourclient::select('id', 'c_name', 'logo_img')->get();

        $data['allblog'] = Allblog::select('id','user_id', 'title', 'meta_title', 'slug', 'description', 'published_date', 'seo_title', 'seo_description', 'blog_img', 'banner_img')
        ->paginate(7);
        
        return view('frontend.blog.index', $data);
        
    }
}
