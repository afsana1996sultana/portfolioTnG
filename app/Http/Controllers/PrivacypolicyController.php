<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Privacy;
use App\Models\Ourclient;

class PrivacypolicyController extends Controller
{
    public function index()
    {

        $data['client'] = Ourclient::select('id', 'c_name', 'logo_img')->get();
        
        $data['privacy'] = Privacy::select('id','title', 'heading', 'details', 'image')->get();

        return view('frontend.privacy&policy.index', $data);
        
    }
}
