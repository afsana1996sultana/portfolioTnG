<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ourclient;
use App\Models\Allevent;

class EventController extends Controller
{
    public function index()
    {

        $data['client'] = Ourclient::select('id', 'c_name', 'logo_img')->get();

        $data['event'] = Allevent::select('id','title', 'heading', 'details', 'image')->get();
        
        return view('frontend.events.index', $data);
        
    }
}