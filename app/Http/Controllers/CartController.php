<?php

namespace App\Http\Controllers;

use App\Cart;
use App\Model\Bill;
use App\Model\BillDetail;
use App\Model\ProductModel;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function checkout(Request $request){
        $oldCart=Session('cart')?Session::get('cart'):null;
        $cart=new Cart($oldCart);
        $bill=new Bill;
        $bill->user_id=Auth::user()->id;
        $mytime = Carbon::now();
        $bill->date_order= $mytime->toDateTimeString();
        $bill->total=$cart->totalPrice;
        $bill->save();
        $bill_id=$bill->id;
        foreach($cart->items as $item){
            $billdetail=new BillDetail;
            $billdetail->bill_id=$bill_id;
            $billdetail->product_id=$item['item']['id'];
            $billdetail->quantily=$item['qty'];
            $billdetail->price=$item['item']['giamoi'];
            $billdetail->save();
        }
        $pr=$cart->items;
        foreach($pr as $data)
            $cart->removeItem($data['item']['id']);
        $request->session()->put('cart',$cart);
        return redirect(url('/'));
    }
}
