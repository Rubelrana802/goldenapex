<?php

namespace App\Http\Controllers;

use App\customer_info;
use Illuminate\Http\Request;

class customerController extends Controller
{
     public function index(){
    	return view('admin.customer.addcustomer');
    }

    public function save(Request $request){
    	$customeradd = new customer_info();
    	$customeradd->customer_name = $request->customer_name;
    	$customeradd->customer_address = $request->address;
    	$customeradd->customer_mobile = $request->mobile;
    	$customeradd->customer_email = $request->email;
    	$customeradd->save();

    	return redirect('/customer/manage')->with('message','Customer Information added Successfully.');
    }

    public function manage(){
    	$customer_info = customer_info::all();
    	return view('admin.customer.managecustomer', get_defined_vars());
    }

    public function edit($id){
        $customer_info = customer_info::where('id',$id)->first();

        return view('admin.Customer.Customeredit', get_defined_vars());
    }

    public function update(Request $request){
        $customer_info = customer_info::find($request->id);
        $customer_info->customer_name = $request->input('customer_name');
        $customer_info->customer_address = $request->input('address');
        $customer_info->customer_mobile = $request->input('mobile');
        $customer_info->customer_email = $request->input('email');
        $customer_info->status = $request->input('status');
        $customer_info->save();

        return redirect('/Customer/manage')->with('message','Customer Information update Successfully.');

    }

    public function delete($id){
        $customer_info = customer_info::find($id);
        $customer_info->delete();

        return redirect('/Customer/manage')->with('message','Customer Information Deleted Successfully.');
    }

    public function managecredit(){
        $customer_info = customer_info::all();
        return view('admin.customer.creditcustomer', get_defined_vars());
    }

    public function managepaid(){
        $customer_info = customer_info::all();
        return view('admin.customer.paidcustomer', get_defined_vars());
    }
}
