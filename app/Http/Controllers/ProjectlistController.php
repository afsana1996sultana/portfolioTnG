<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Allproject;
use App\Models\Ourclient;


class ProjectlistController extends Controller
{
    public function index()
    {
        $data['allproject'] = Allproject::select('id', 'ap_name', 'ap_group', 'title', 'image', 'url')->get();

        $data['client'] = Ourclient::select('id', 'c_name', 'logo_img')->get();
        return view('frontend.projectlist.index', $data);
        
    }
}