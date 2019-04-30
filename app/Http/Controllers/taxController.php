<?php

namespace App\Http\Controllers;

use App\tax;
use Illuminate\Http\Request;

class taxController extends Controller
{
    public function index(){
    	return view('admin.tax.addtax');
    }

    public function save(Request $request){
    	$taxes = new tax();
    	$taxes->tax = $request->taxName;
    	$taxes->save();

    	return redirect('/tax/manage')->with('message','Tax Added Successfully');
    }

    public function manage(){
    	$tax = tax::all();
    	return view('admin.tax.managetax')->with(['tax'  => $tax ]);
    }

    public function edit($id){
        $tax = tax::where('id',$id)->first();

        return view('admin.tax.taxedit')->with(['tax' => $tax]);
    }

    public function update(Request $request){
        $tax = tax::find($request->id);
        $tax->tax = $request->input('Taxname');
        $tax->status = $request->input('status');
        $tax->save();

        return redirect('/tax/manage')->with('message','Tax update Successfully.');

    }

    public function delete($id){
        $tax = tax::find($id);
        $tax->delete();

        return redirect('/tax/manage')->with('message','Tax Deleted Successfully.');
    }
}
