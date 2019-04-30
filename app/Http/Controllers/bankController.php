<?php

namespace App\Http\Controllers;
use App\bank_add;
use Illuminate\Http\Request;

class bankController extends Controller
{
    public function index(){
    	return view('admin.bank.addBank');
    }

    public function save(Request $request){
    	$bankadd = new bank_add();
    	$bankadd->bank_name = $request->bank_name;
    	$bankadd->ac_name = $request->ac_name;
    	$bankadd->ac_number = $request->ac_no;
    	$bankadd->branch = $request->branch;
    	$bankadd->address = $request->address;
    	$bankadd->opening_balance = $request->opening_balance;
    	$bankadd->save();

    	return redirect('/bank/manage')->with('message','Bank added Successfully.');
    }

    public function manage(){
    	$banks = bank_add::all();
    	return view('admin.bank.manageBank', get_defined_vars());
    }

    public function transaction(){
    	$banks = bank_add::all();
    	return view('admin.bank.addTransaction', get_defined_vars());
    }
}
