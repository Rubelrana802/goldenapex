<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class categoryController extends Controller
{
    public function index(){
    	return view('admin.category.addCategory');
    }

    public function save(Request $request){
    	$categoryadd = new category();
    	$categoryadd->category_name = $request->categoryName;
    	$categoryadd->save();

    	return redirect('/category/manage')->with('message','Category added Successfully.');
    }

    public function manage(){
    	$category = category::all();
    	return view('admin.category.categoryManage')->with(['category' => $category]);
    }

    public function edit($id){
     $category = category::where('id',$id)->first();
     return view('admin.category.categoryEdit')->with(['category' => $category]);
    }

    public function update(Request $request){
     $category = category::find($request->id); //form id 
     $category->category_name = $request->input('categoryName');
     $category->status = $request->input('status');
     $category->save();

     return redirect('/category/manage')->with('message','Category Updated Successfully.');
    }
 

    public function delete($id){
        $category = category::find($id);
        $category->delete();

        return redirect('/category/manage/')->with('message','Category Deteted Successfully');
    }
}
