<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supplier_info;

class supplierController extends Controller
{
    public function index(){
    	return view('admin.supplier.addsupplier');
    }

    public function save(Request $request){
    	$supplieradd = new supplier_info();
    	$supplieradd->supplier_id = $request->supplier_id;
    	$supplieradd->supplier_name = $request->supplier_name;
    	$supplieradd->address = $request->address;
    	$supplieradd->mobile = $request->mobile;
    	$supplieradd->details = $request->details;
    	$supplieradd->status = $request->status;
    	$supplieradd->save();

    	return redirect('/supplier/manage')->with('message','Supplier Information added Successfully.');
    }

    public function manage(){
    	$supplier_info = supplier_info::all();
    	return view('admin.supplier.managesupplier')->with(['supplier_info'  => $supplier_info ]);
    }

    public function edit($id){
        $supplier_info = supplier_info::where('id',$id)->first();

        return view('admin.supplier.supplieredit')->with(['supplier_info' => $supplier_info]);
    }

    public function update(Request $request){
        $supplier_info = supplier_info::find($request->id);
        $supplier_info->supplier_id = $request->input('supplier_id');
        $supplier_info->supplier_name = $request->input('supplier_name');
        $supplier_info->address = $request->input('address');
        $supplier_info->mobile = $request->input('mobile');
        $supplier_info->details = $request->input('details');
        $supplier_info->status = $request->input('status');
        $supplier_info->save();

        return redirect('/supplier/manage')->with('message','Supplier Information update Successfully.');

    }

    public function delete($id){
        $supplier_info = supplier_info::find($id);
        $supplier_info->delete();

        return redirect('/supplier/manage')->with('message','Supplier Information Deleted Successfully.');
    }
}
