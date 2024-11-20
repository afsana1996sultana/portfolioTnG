<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Service;
use App\Models\Ourclient;

class AllserviceController extends Controller
{
    public function index()
    {
        $data['service'] = Service::select('id', 'category', 'title', 'details', 'icon', 'image')->get();

        $data['client'] = Ourclient::select('id', 'c_name', 'logo_img')->get();
        return view('frontend.allservice.index', $data);
        
    }
}
