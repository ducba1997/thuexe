<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Model\ProductModel;
use Illuminate\Http\Request;
use Session;

class CartController extends Controller
{
    public function addToCart(Request $request,$id){
        $product=ProductModel::find($id);
        $oldCart=Session('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->add($product,$id);
        $request->session()->put('cart',$cart);
        return redirect(url('/'));
    }
}
