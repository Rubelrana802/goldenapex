<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;

class supplierController extends Controller
{
    public function index(){
    	return view('admin.supplier.addsupplier');
    }

    public function save(Request $request){
    	$supplieradd = new Supplier();
    	$supplieradd->name = $request->name;
    	$supplieradd->email = $request->email;
    	$supplieradd->mobile = $request->mobile;
    	$supplieradd->previous_due = $request->previous_due;
    	$supplieradd->address = $request->address;
    	$supplieradd->save();

    	return redirect('/supplier/manage')->with('message','Supplier Information added Successfully.');
    }

    public function manage(){
    	$supplier_info = Supplier::all();
    	return view('admin.supplier.managesupplier')->with(['supplier_info'  => $supplier_info ]);
    }

    public function edit($id){
		$supplier_info = Supplier::find($id);

        return view('admin.supplier.supplieredit')->with(['supplier_info' => $supplier_info]);
    }

    public function update(Request $request){
        $supplieradd =  Supplier::find($request->id);
    	$supplieradd->name = $request->name;
    	$supplieradd->email = $request->email;
    	$supplieradd->mobile = $request->mobile;
    	$supplieradd->previous_due = $request->previous_due;
    	$supplieradd->address = $request->address;
    	$supplieradd->save();

        return redirect('/supplier/manage')->with('message','Supplier Information update Successfully.');

    }

 
}
