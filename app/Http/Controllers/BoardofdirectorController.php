<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Director;
use App\Models\Ourclient;
use App\Models\Skill;


class BoardofdirectorController extends Controller
{
    public function index()
    {
        $data['director'] = Director::select('id', 'name', 'qualification', 'designation', 'phone', 'email', 'facebook',
        'twitter', 'pinterest', 'linkedin', 'image')->get();

        $data['skill'] = Skill::select('id', 'skill_name', 'skill_amount')->get();

        $data['client'] = Ourclient::select('id', 'c_name', 'logo_img')->get();

        return view('frontend.boardofdirector.index', $data);
        
    }
}
