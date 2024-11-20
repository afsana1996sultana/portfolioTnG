<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Team;
use App\Models\Teammember;
use App\Models\Ourclient;

class OurteamController extends Controller
{
    public function index()
    {

        $data['team'] = Team::select('id', 'name', 'qualification', 'designation', 'details',
        'twitter', 'facebook', 'instagram', 'linkedin', 'image' )->get();

        $data['teammember'] = Teammember::select('id', 'tm_name')->get();

        $data['client'] = Ourclient::select('id', 'c_name', 'logo_img')->get();

        return view('frontend.ourteam.index', $data);
        
    }
}
