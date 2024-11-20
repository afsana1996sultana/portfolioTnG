<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Condition;
use App\Models\Ourclient;

class TermController extends Controller
{
    public function index()
    {

        $data['client'] = Ourclient::select('id', 'c_name', 'logo_img')->get();
        $data['condition'] = Condition::select('id','title', 'heading', 'details', 'image')->get();

        return view('frontend.terms&condition.index', $data);
        
    }
}
