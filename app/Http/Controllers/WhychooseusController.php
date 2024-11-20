<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Count;
use App\Models\Ourclient;

class WhychooseusController extends Controller
{
    public function index()
    {
        $data['count'] = Count::select('id', 'client_num', 'project_num', 'support_num', 'worker_num')->get();

        $data['client'] = Ourclient::select('id', 'c_name', 'logo_img')->get();

        return view('frontend.whychooseus.index', $data);
        
    }
}
