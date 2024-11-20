<?php

namespace App\Http\Controllers;

use App\Models\MultiImg;
use Illuminate\Support\Facades\DB;
use App\Models\Product;
use App\Models\Childmenu;
use App\Models\Submenu;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    public function index()
    {
        $childmenus=Childmenu::with('submenu')->get();
        // dd($childmenus);
        return view("pages.backend.product.index",compact('childmenus'));
    }

    public function getSubMenuId(Request $request, $id)
    {

        // If you want to find the submenu, uncomment the following lines
        $childmenu = Childmenu::find($id);
        return response()->json([
            'status' => 1,
            'data' =>  $childmenu
            ]);
    }


    public function manage(){

        $products = Product::all();
        return view("pages.backend.product.list",compact('products'));
    }


    public function store(Request $request)
    {
        //dd($request);
        $slug = Str::slug($request->title);
        $fitureImgPath = null;
        if ($request->hasFile('fitureImg')) {
            $imageName = time() . rand(100, 1000) . '.' . $request->fitureImg->extension();
            $fitureImgPath = 'img/' . $imageName;
            $request->fitureImg->move(public_path('img'), $imageName);
        }

        $product = Product::create([
            'title' => $request->title,
            'child_menu_id' => $request->child_menu_id,
            'sub_menu_id' => $request->sub_menu_id,
            'fitureImg' => $fitureImgPath ?? null,
            'price' => $request->price,
            'status' => $request->status,
            'description' => $request->description,
            'slug' => $slug,
        ]);

        //dd($product);

        if ($request->hasFile('multiImg')) {
            foreach ($request->file('multiImg') as $multiImg) {
                $imageName = time() . rand(100, 1000) . '.' . $multiImg->extension();
                $multiImgPath = 'img/' . $imageName;
                $multiImg->move(public_path('img'), $imageName);

                MultiImg::create([
                    'product_id' => $product->id, // Assuming the column name is 'product_id'
                    'image' => $multiImgPath,
                ]);
            }
        }

        return redirect()->route('allProduct')->with('success', 'Product added successfully.');
    }



    public function edit($id) {
        $product = Product::findOrFail($id);
        $childmenus=Childmenu::with('submenu')->get();
        return view("pages.backend.product.edit",compact('product','childmenus'));
    }


    public function update(Request $request, $id)
    {
        $product = Product::findOrFail($id);
        $slug = Str::slug($request->title);
        $fitureImgPath = $product->fitureImg;
        if ($request->hasFile('fitureImg')) {
            // Delete the old image file if it exists
            if ($fitureImgPath) {
                if (file_exists(public_path($fitureImgPath))) {
                    unlink(public_path($fitureImgPath));
                }
            }

            $imageName = time() . rand(100, 1000) . '.' . $request->fitureImg->extension();
            $fitureImgPath = 'img/' . $imageName;
            $request->fitureImg->move(public_path('img'), $imageName);
        }

        $product->update([
            'title' => $request->title,
            'child_menu_id' => $request->child_menu_id,
            'sub_menu_id' => $request->sub_menu_id,
            'fitureImg' => $fitureImgPath,
            'price' => $request->price,
            'status' => $request->status,
            'description' => $request->description,
            'slug' => $slug,
        ]);

        //dd($product);

        return redirect()->route('allProduct')->with('success', 'Product updated successfully.');
    }


    public function destroy(Request $request){
        $product=$request->input('d_product');
		$product= Product::find($product);
		$product->delete();

        return redirect()->back()
        ->with('success',' Deleted successfully');
    }
}
