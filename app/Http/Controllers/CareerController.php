<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ourclient;

class CareerController extends Controller
{
    public function index()
    {

        $data['client'] = Ourclient::select('id', 'c_name', 'logo_img')->get();
        return view('frontend.catalogue.index', $data);

    }
}
