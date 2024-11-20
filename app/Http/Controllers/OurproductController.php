<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Ourclient;
use App\Models\Product;
use App\Models\Submenu;

class OurproductController extends Controller
{
    public function index()
    {

        $data['client'] = Ourclient::select('id', 'c_name', 'logo_img')->get();

        $data['product'] = Product::select('id','category', 'title', 'details', 'heading', 'price', 'image')->get();

        return view('frontend.ourproduct.index', $data);
        
    }

  
}
