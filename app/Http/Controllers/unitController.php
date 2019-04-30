<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\unit;

class unitController extends Controller
{
    public function index(){
    	return view('admin.unit.addUnit');
    }

    public function save(Request $request){
    	$unitadd = new unit();
    	$unitadd->unit_name = $request->unitName;
    	$unitadd->save();

    	return redirect('/unit/manage')->with('message','Unit added Successfully.');
    }

    public function manage(){
    	$units = unit::all();
    	return view('admin.unit.manageUnit')->with(['units'  => $units ]);
    }

    public function edit($id){
    	$unitedit = unit::where('id',$id)->first();

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
