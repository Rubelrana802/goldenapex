<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Location;

class LocationController extends Controller
{
    public function manage(){
        $locations = Location::orderBy('id','desc')->paginate();
        return view('admin.location.managelocation',[
            'locations' => $locations,
        ]);
    }
    public function  create(){
        return view('admin.location.addlocation');
    }
    public function store(Request $request){
        $location  = new Location();
        $location->name = $request->name;
        $location->address = $request->address;
        $location->mobile = $request->mobile;
        $location->status = $request->status;
        $location->save();
        return redirect()->route('location.manage')->with('message','Store Added Successfully');
    
    }

    public function  edit($id){
        $location  =  Location::find($id);
        return view('admin.location.editlocation',[
            'location' => $location,
        ]);
    }

    public function  update(Request $request){
        $location  =  Location::find($request->id);
        $location->name = $request->name;
        $location->address = $request->address;
        $location->mobile = $request->mobile;
        $location->status = $request->status;
        $location->save();
        return redirect()->route('location.manage')->with('message','Store Update Successfully');
    }


}
