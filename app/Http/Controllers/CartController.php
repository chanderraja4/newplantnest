<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class CartController extends Controller
{
    
    // Cart

    public function addtocart(Request $req){

        // dd($req->session());

        if($req->session()->has('usernew')){
            $cart = new Cart;
            $cart->user_id=$req->session()->get('usernew')['id'];
            $cart->plant_id = $req->plant_id;
            $cart->save();
            return redirect()->back();
        }
        else{
            return redirect()->back();
        }
    }

    static function cartItem(){
        // $user_id = Session::get('usernew')['id'];
        // return Cart::where('id', $user_id)->count(); 
        $user_id = Session::get('usernew')['id'];
        return Cart::where('user_id', $user_id)->count(); 
    }

    public function cartlist(){
        $userId = Session::get('usernew')['id'];
        $data = DB::table('cart')
        ->join('plants', 'cart.plant_id', 'plants.id')
        ->select('plants.*', 'cart.id as cart_id')
        ->where('cart.user_id',$userId)
        ->get();

        return view('pages.cart', ['plants'=>$data]);
    }


    public function cartdelete($id){
        Cart::destroy($id);
        return redirect()->back();
    }
  
}
