<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ourclient;
use App\Models\Allactivity;

class ActivityController extends Controller
{
    public function index()
    {

        $data['client'] = Ourclient::select('id', 'c_name', 'logo_img')->get();

        $data['activity'] = Allactivity::select('id','title', 'heading', 'details', 'image')->get();

        return view('frontend.activity.index', $data);
        
    }
}
