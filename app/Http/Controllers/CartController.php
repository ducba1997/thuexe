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
    public function deleteItemCart(Request $request,$id){
        $oldCart=Session('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $cart->removeItem($id);
        $request->session()->put('cart',$cart);
        return redirect(url('/'));
    }
    public function deleteAllItem(Request $request){
        $oldCart=Session('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $pr=$cart->items;
        foreach($pr as $data)
            $cart->removeItem($data['item']['id']);
        $request->session()->put('cart',$cart);
        return redirect(url('/'));
    }
}
