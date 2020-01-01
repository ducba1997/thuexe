<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\ProductModel;
class ProductController extends Controller
{
    public function index($id){
    	$data=ProductModel::find($id);
    	if(count($data)>0)
    		return view('product.product')->with('data',$data);
    	return redirect('');
    }
}
