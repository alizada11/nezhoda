<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use DB;
use Auth;

class ShopController extends Controller
{
    //


    public function index(){
        $shops = DB::table('shops')
                ->where('user_id', '=', Auth::user()->id)
                ->get();
        return view('shop.show',compact('shops'));

    }


    public function create(){
        return view('shop.create');
    }

    public function store(Request $request){

        $request->validate([
            'shop_name' => 'required',
            'category' => 'required',
            'location' => 'required',
            'country' => 'required',
            'address' => 'required',
            'description' => 'required',
            'user_id'   =>'required'
        ]);
        $data = array(
            'shop_name' => $request->shop_name,
            'category' => $request->category,
            'location' => $request->location,
            'country' => $request->country,
            'address' => $request->address,
            'description' => $request->description,
            'user_id'   =>$request->user_id
        );

        Shop::create($data);
     
        return redirect()->route('shop.index')
                        ->with('success','Product created successfully.');
    }

    public function prefered(Request $request){
        $id = $request->id;
        echo $id;die;
        DB::table('shops')->where('id', $id)->update($data);
       
        return json_encode(array('statusCode'=>200));
    }
}
