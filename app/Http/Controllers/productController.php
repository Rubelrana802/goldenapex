<?php

namespace App\Http\Controllers;

use App\product;
use App\category;
use Illuminate\Http\Request;

class productController extends Controller
{
    public function index(){
        $category = category::pluck('category_name', 'category_name');
    	return view('admin.product.addproduct')->with(['category' => $category]);
    }

    public function save(Request $request){
    	$products = new product();
    	$products->category_id = $request->category_id;
    	$products->product_name = $request->product_name;
    	$products->price = $request->price;
    	$products->unit = $request->unit;
    	$products->tax = $request->tax;
    	$products->serial_no = $request->serial_no;
    	$products->product_model = $request->model;
    	$products->product_details = $request->description;
    	$products->image = $request->image;
    	$products->status = $request->status;
    	$products->save();

    	return redirect('/product/manage')->with('message','Tax Added Successfully');
    }

    public function manage(){
        $category = category::all();
        return view('admin.category.categoryManage')->with(['category' => $category]);
    }

    public function edit($id){
        $products = unit::where('id',$id)->first();

        return view('admin.unit.unitedit')->with(['unit' => $unitedit]);
    }

    public function update(Request $request){
        $unit = unit::find($request->id);
        $unit->unit_name = $request->input('Uname');
        $unit->status = $request->input('status');
        $unit->save();

        return redirect('/unit/manage')->with('message','Unit update Successfully.');

    }

    public function delete($id){
        $unit = unit::find($id);
        $unit->delete();

        return redirect('/unit/manage')->with('message','Unit Deleted Successfully.');
    }
}
