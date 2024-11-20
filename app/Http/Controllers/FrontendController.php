<?php

namespace App\Http\Controllers;

use App\Models\Businesscategory;
use App\Models\Choosesection;
use App\Models\Count;
use App\Models\Frequentsection;
use App\Models\Gallery;
use App\Models\Ourclient;
use App\Models\Dealer;
use App\Models\Projectcategory;
use App\Models\Service;
use App\Models\Slider;
use App\Models\Team;
use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Support\Facades\View;
use App\Models\Product;
use App\Models\Submenu;
use App\Models\Childmenu;

class FrontendController extends Controller
{
    public function home()
    {

        $data['count'] = Count::select('id', 'client_num', 'project_num', 'support_num', 'worker_num')->get();
        // View()->share($count);

        $data['businesscategories'] = Businesscategory::select('id', 'bc_name')->get();
        // View()->share($category);

        $data['team'] = Team::select(
            'id',
            'name',
            'qualification',
            'designation',
            'twitter',
            'facebook',
            'instagram',
            'linkedin',
            'image'
        )->get();

        $data['choosesection'] = Choosesection::select('id', 'sn', 'title', 'detail', 'icon')->get();

        $data['client'] = Ourclient::select('id', 'c_name', 'logo_img')->get();

        $data['service'] = Service::select('id', 'category', 'title', 'details', 'icon', 'image')->get();

        $data['frequentsection'] = Frequentsection::select('id', 'fre_question', 'fre_answer')
            ->Limit(3)->get();

        $data['frequentsection'] = Frequentsection::select('id', 'fre_question', 'fre_answer')
            ->Limit(3)->get();

        $data['frequentsection2'] = Frequentsection::select('id', 'fre_question', 'fre_answer')
            ->skip(3)
            ->limit(3)
            ->get();

        $data['projectcatrgories'] = Projectcategory::select('id', 'pc_name', 'p_group', 'title', 'image', 'url')->get();
        $data['subMenus'] = SubMenu::all();
        $data['childMenus'] = Childmenu::all();
        $data['products'] = Product::where('status',1)->get();
        $data['sliders'] = Slider::where('status',1)->get();
        return view('frontend.home', $data);
    }


    public function product($id)
    {
        $childmenus = Childmenu::findOrFail($id);
        $products = Product::where('child_menu_id', $childmenus->id)->get();
        $client = Ourclient::select('id', 'c_name', 'logo_img')->get();

        return view('frontend.product.allproduct', compact('childmenus', 'products', 'client'));
    }

    public function singleProduct($id)
    {
        $product = Product::findOrFail($id);
        $client = Ourclient::select('id', 'c_name', 'logo_img')->get();
        return view('frontend.product.single', compact('product', 'client'));
    }


    public function AllProduct()
    {
        $products = Product::all();
        $client = Ourclient::select('id', 'c_name', 'logo_img')->get();
        return view('frontend.product.allproductshow', compact('products', 'client'));
    }


    public function branch()
    {
        $data['client'] = Ourclient::select('id', 'c_name', 'logo_img')->get();
        return view('frontend.branch.index', $data);
    }


    public function faq()
    {
        $data['client'] = Ourclient::select('id', 'c_name', 'logo_img')->get();
        $data['alldealer'] = Dealer::all();
        return view('frontend.faq.index', $data);
    }


    public function DealerApply()
    {
        $data['client'] = Ourclient::select('id', 'c_name', 'logo_img')->get();
        return view('frontend.dealer.index', $data);
    }
}
