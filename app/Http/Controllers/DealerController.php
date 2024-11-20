<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Dealer;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class DealerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dealers = Dealer::all();
        return view("pages.backend.dealer.dealer_list",compact('dealers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $dealers = Dealer::all();
        return view("pages.backend.dealer.create",compact('dealers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $passportImgPaths = [];
        $nidImgPath = null;
        $tradeImgPath = null;
        $tinImgPath = null;
        $visitingcardImgPath = null;
        $didcopyImgPath = null;
        if ($request->hasFile('passport_img')) {
            foreach ($request->file('passport_img') as $image) {
                // Check if the file upload was successful
                if ($image->isValid()) {
                    $imageName = time() . '_' . uniqid() . '.' . $image->extension();
                    $image->move(public_path('img'), $imageName);
                    $passportImgPaths[] = 'img/' . $imageName;
                } else {
                    // Handle file upload failure
                    return redirect()->back()->with('error', 'Failed to upload image.');
                }
            }
        }

        if ($request->hasFile('nid')) {
            $imageName = time() . rand(100, 1000) . '.' . $request->nid->extension();
            $nidImgPath = 'img/' . $imageName;
            $request->nid->move(public_path('img'), $imageName);
        }

        if ($request->hasFile('trade_license')) {
            $imageName = time() . rand(100, 1000) . '.' . $request->trade_license->extension();
            $tradeImgPath = 'img/' . $imageName;
            $request->trade_license->move(public_path('img'), $imageName);
        }

        if ($request->hasFile('tin')) {
            $imageName = time() . rand(100, 1000) . '.' . $request->tin->extension();
            $tinImgPath = 'img/' . $imageName;
            $request->tin->move(public_path('img'), $imageName);
        }

        if ($request->hasFile('visiting_card')) {
            $imageName = time() . rand(100, 1000) . '.' . $request->visiting_card->extension();
            $visitingcardImgPath = 'img/' . $imageName;
            $request->visiting_card->move(public_path('img'), $imageName);
        }

        if ($request->hasFile('did_copy')) {
            $imageName = time() . rand(100, 1000) . '.' . $request->did_copy->extension();
            $didcopyImgPath = 'img/' . $imageName;
            $request->did_copy->move(public_path('img'), $imageName);
        }

        $dealers = Dealer::create([
            'name' => $request->name,
            'company_name' => $request->company_name,
            'passport_img' => !empty($passportImgPaths) ? json_encode($passportImgPaths) : null,
            'nid' => $nidImgPath ?? null,
            'trade_license' => $tradeImgPath ?? null,
            'tin' => $tinImgPath ?? null,
            'visiting_card' => $visitingcardImgPath ?? null,
            'did_copy' => $didcopyImgPath ?? null,
            'address' => $request->address,
            'district' => $request->district,
            'police_station' => $request->police_station,
            'notes' => $request->notes,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);

        return redirect()->back()->with('success', 'Dealer Application Submitted successfully.');
    }


    public function Adminstore(Request $request)
    {
        $passportImgPaths = [];
        $nidImgPath = null;
        $tradeImgPath = null;
        $tinImgPath = null;
        $visitingcardImgPath = null;
        $didcopyImgPath = null;
        if ($request->hasFile('passport_img')) {
            foreach ($request->file('passport_img') as $image) {
                // Check if the file upload was successful
                if ($image->isValid()) {
                    $imageName = time() . '_' . uniqid() . '.' . $image->extension();
                    $image->move(public_path('img'), $imageName);
                    $passportImgPaths[] = 'img/' . $imageName;
                } else {
                    // Handle file upload failure
                    return redirect()->back()->with('error', 'Failed to upload image.');
                }
            }
        }

        if ($request->hasFile('nid')) {
            $imageName = time() . rand(100, 1000) . '.' . $request->nid->extension();
            $nidImgPath = 'img/' . $imageName;
            $request->nid->move(public_path('img'), $imageName);
        }

        if ($request->hasFile('trade_license')) {
            $imageName = time() . rand(100, 1000) . '.' . $request->trade_license->extension();
            $tradeImgPath = 'img/' . $imageName;
            $request->trade_license->move(public_path('img'), $imageName);
        }

        if ($request->hasFile('tin')) {
            $imageName = time() . rand(100, 1000) . '.' . $request->tin->extension();
            $tinImgPath = 'img/' . $imageName;
            $request->tin->move(public_path('img'), $imageName);
        }

        if ($request->hasFile('visiting_card')) {
            $imageName = time() . rand(100, 1000) . '.' . $request->visiting_card->extension();
            $visitingcardImgPath = 'img/' . $imageName;
            $request->visiting_card->move(public_path('img'), $imageName);
        }

        if ($request->hasFile('did_copy')) {
            $imageName = time() . rand(100, 1000) . '.' . $request->did_copy->extension();
            $didcopyImgPath = 'img/' . $imageName;
            $request->did_copy->move(public_path('img'), $imageName);
        }

        $dealers = Dealer::create([
            'name' => $request->name,
            'company_name' => $request->company_name,
            'passport_img' => !empty($passportImgPaths) ? json_encode($passportImgPaths) : null,
            'nid' => $nidImgPath ?? null,
            'trade_license' => $tradeImgPath ?? null,
            'tin' => $tinImgPath ?? null,
            'visiting_card' => $visitingcardImgPath ?? null,
            'did_copy' => $didcopyImgPath ?? null,
            'address' => $request->address,
            'district' => $request->district,
            'police_station' => $request->police_station,
            'notes' => $request->notes,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);
        //dd($dealers);

        return redirect()->route('dealer.list')->with('success', 'Dealer Added successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $dealers = Dealer::findOrFail($id);
        return view("pages.backend.dealer.show",compact('dealers'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $dealers = Dealer::findOrFail($id);
        return view("pages.backend.dealer.edit",compact('dealers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id)
    {
        $dealer = Dealer::findOrFail($id);

        $passportImgPaths = $dealer->passport_img;
        $nidPath = $dealer->nid;
        $tradePath = $dealer->trade_license;
        $tinPath = $dealer->tin;
        $visitingcardPath = $dealer->visiting_card;
        $didcopyPath = $dealer->did_copy;

        if ($request->hasFile('passport_img')) {
            // Initialize an array to hold new passport image paths
            $newPassportImgPaths = [];
        
            foreach ($request->file('passport_img') as $image) {
                // Check if the file upload was successful
                if ($image->isValid()) {
                    // Generate a unique image name
                    $imageName = time() . '_' . uniqid() . '.' . $image->getClientOriginalExtension();
                    
                    // Move the uploaded image to the public/img directory
                    $image->move(public_path('img'), $imageName);
                    
                    // Store the new image path in the array
                    $newPassportImgPaths[] = 'img/' . $imageName;
                } else {
                    // Handle file upload failure
                    return redirect()->back()->with('error', 'Failed to upload image.');
                }
            }
        
            // Check if the new passport image paths are different from the existing paths
            if (!empty($dealer->passport_img)) {
                $existingPassportImgPaths = json_decode($dealer->passport_img, true);
                
                if (is_array($newPassportImgPaths) && is_array($existingPassportImgPaths)) {
                    if ($newPassportImgPaths != $existingPassportImgPaths) {
                        // Delete the old passport images if they exist
                        foreach ($existingPassportImgPaths as $path) {
                            if (file_exists(public_path($path))) {
                                unlink(public_path($path));
                            }
                        }
                        // Update the dealer's passport_img field with the new image paths
                        $dealer->passport_img = json_encode($newPassportImgPaths);
                    }
                }
            } else {
                // If there are no existing passport images, simply update the dealer's passport_img field
                $dealer->passport_img = json_encode($newPassportImgPaths);
            }
        }        

        if ($request->hasFile('nid')) {
            // Delete the old image file if it exists
            if ($nidPath) {
                if (file_exists(public_path($nidPath))) {
                    unlink(public_path($nidPath));
                }
            }

            $imageName = time() . rand(100, 1000) . '.' . $request->nid->extension();
            $nidPath = 'img/' . $imageName;
            $request->nid->move(public_path('img'), $imageName);
        }

        if ($request->hasFile('trade_license')) {
            // Delete the old image file if it exists
            if ($tradePath) {
                if (file_exists(public_path($tradePath))) {
                    unlink(public_path($tradePath));
                }
            }

            $imageName = time() . rand(100, 1000) . '.' . $request->trade_license->extension();
            $tradePath = 'img/' . $imageName;
            $request->trade_license->move(public_path('img'), $imageName);
        }


        if ($request->hasFile('tin')) {
            // Delete the old image file if it exists
            if ($tinPath) {
                if (file_exists(public_path($tinPath))) {
                    unlink(public_path($tinPath));
                }
            }

            $imageName = time() . rand(100, 1000) . '.' . $request->tin->extension();
            $tinPath = 'img/' . $imageName;
            $request->tin->move(public_path('img'), $imageName);
        }


        if ($request->hasFile('visiting_card')) {
            // Delete the old image file if it exists
            if ($visitingcardPath) {
                if (file_exists(public_path($visitingcardPath))) {
                    unlink(public_path($visitingcardPath));
                }
            }

            $imageName = time() . rand(100, 1000) . '.' . $request->visiting_card->extension();
            $visitingcardPath = 'img/' . $imageName;
            $request->visiting_card->move(public_path('img'), $imageName);
        }

        if ($request->hasFile('did_copy')) {
            // Delete the old image file if it exists
            if ($didcopyPath) {
                if (file_exists(public_path($didcopyPath))) {
                    unlink(public_path($didcopyPath));
                }
            }

            $imageName = time() . rand(100, 1000) . '.' . $request->did_copy->extension();
            $didcopyPath = 'img/' . $imageName;
            $request->did_copy->move(public_path('img'), $imageName);
        }
        
        // Update dealer information
        $dealer->update([
            'name' => $request->name,
            'company_name' => $request->company_name,
            'nid' => $nidPath,
            'trade_license' => $tradePath,
            'tin' => $tinPath,
            'visiting_card' => $visitingcardPath,
            'did_copy' => $didcopyPath,
            'address' => $request->address,
            'district' => $request->district,
            'police_station' => $request->police_station,
            'notes' => $request->notes,
            'phone' => $request->phone,
            'email' => $request->email,
        ]);        

        //dd($dealer);
        return redirect()->back()->with('success', 'Dealer updated successfully.');
    }
     
     

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request){  
        $dealer=$request->input('d_dealer');
		$dealer= Dealer::find($dealer);
		$dealer->delete();
        return redirect()->back()->with('success',' Deleted successfully');
    }
}
