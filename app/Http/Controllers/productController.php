<?php

namespace App\Http\Controllers;

use App\product;
use App\category;
use DB;
use Illuminate\Http\Request;


class productController extends Controller
{
    public function index(){
        $categories = category::where('status',1)->get();
        // return $category;
    	return view('admin.product.addproduct',[
            'categories'=>$categories,
        ]);
    }

    public function save(Request $request){

    	$products = new product();
    	$products->category_id = $request->category_id;
    	$products->product_name = $request->product_name;
    	$products->product_code = $request->product_code;
    	$products->purchase_price = $request->purchase_price;
    	$products->sale_price = $request->sale_price;
    	$products->status = $request->status;
    	$products->save();

    	return redirect('/product/manage')->with('message','Product Added Successfully');
    }

    public function manage(){
        $products =  product::paginate(10);
        $categories = category::where('status',1)->get();
        return view('admin.product.manageproduct',[
            'products' => $products
        ]);
    }

    public function edit($id){
        $product = product::where('id',$id)->first();
        $categories = category::where('status',1)->get();
        return view('admin.product.editproduct',[
            'product' => $product,
            'categories' => $categories,
        ]);
    }

    public function update(Request $request){
        $product =  product::find($request->product_id);
    	$product->category_id = $request->category_id;
    	$product->product_name = $request->product_name;
    	$product->product_code = $request->product_code;
    	$product->purchase_price = $request->purchase_price;
    	$product->sale_price = $request->sale_price;
    	$product->status = $request->status;
    	$product->save();

    	return redirect('/product/manage')->with('message','Product Updated Successfully');


    }

    public function delete($id){
        $delete = product::find($id);
        $delete->delete();

        return redirect('/product/manage')->with('message','Product Deleted Successfully.');
    }
}
