<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ourclient;

class SitemapController extends Controller
{
    public function index()
    {

        $data['client'] = Ourclient::select('id', 'c_name', 'logo_img')->get();

        return view('frontend.sitemap.index', $data);
        
    }
}
