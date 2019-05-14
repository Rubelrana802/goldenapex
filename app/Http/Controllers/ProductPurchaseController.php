<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\product;
use App\Location;
use App\product_purchase;
use App\product_purchase_details;
use App\Stock;
use Illuminate\Support\Facades\Input;
use Carbon\Carbon;


class ProductPurchaseController extends Controller
{
    //

    public function managePurchaseProduct(){
        $product_purchase = product_purchase::orderBy('id','desc')->paginate(10);
    
        $supplierid = $product_purchase->pluck('supplier_id')->unique();
      
        $suppliers         = Supplier::whereIn('id',$supplierid)->get();
    
        $totalPurchasePrice = product_purchase::sum('grand_total_amount');

        return view('admin.purchase-product.manage-purchase-product',[
            'product_purchase' => $product_purchase,
            'suppliers'         => $suppliers,
            'totalPurchasePrice'         => $totalPurchasePrice,
            
        ]);
    }

    public function purchaseProduct(){
        $suppliers = Supplier::all();
        $products = product::all();
        $locations = Location::all();
        return view('admin.purchase-product.purchase-product',[
            'suppliers' => $suppliers,
            'products' => $products,
            'locations' => $locations,
        ]);
    }

    public function savePurchaseProductIfo(Request $request){
        // return $request->all();

        $inputs = Input::except(['_token','challan_no','purchase_date','total_discount','grand_total_price','supplier_id','status','purchase_details','payment_type',]);

        $product_purchase = new product_purchase();
        $product_purchase->challan_no = $request->challan_no;
        $product_purchase->supplier_id = $request->supplier_id;
        $product_purchase->status = $request->status;
        $product_purchase->purchase_details = $request->purchase_details;
        $product_purchase->purchase_date = $request->purchase_date;
        $product_purchase->payment_type = $request->payment_type;
       
        $grand_total = 0;
        // $dis_percent = 0;
        
        if(count($inputs) > 0){
            for($i = 0; $i < count($inputs['product_quantity']); $i++){
                $total_price =  $request->product_quantity[$i] * $request->product_rate[$i];;
                $grand_total += $total_price;
            } 
        }
        
        $total_discount = $grand_total *  $request->dis_percent;
        $total_discount = $total_discount/100;
        $product_purchase->total_discount = $total_discount;
        $product_purchase->grand_total_amount = $grand_total - $total_discount;
        $product_purchase->save();

        if(count($inputs) > 0){
            for($i = 0; $i < count($inputs['product_quantity']); $i++){
                $detail = new product_purchase_details();
                $detail->purchase_id = $product_purchase->id;
                $detail->inventory_id = $request->inventory_id;
                $detail->product_id = $request->products_id[$i];
                $detail->quantity = $request->product_quantity[$i];
                $detail->rate = $request->product_rate[$i];

                $total_price =  $request->product_quantity[$i] * $request->product_rate[$i];

                $discount =  $total_price * $request->dis_percent;
                $discount = $discount/100;
                $detail->discount = $discount ;
                $detail->total_amount = $total_price -$discount;
                $detail->save();

                $stock = Stock::where('product_id',$detail->product_id)->first();
                // return $stock;
                if(!empty($stock)){
                    $stock->purchase_qty  +=  $request->product_quantity[$i];
                    $stock->save();
                }else{
                    $stock  = new Stock();
                    $stock->product_id  = $request->products_id[$i];
                    $stock->purchase_qty  = $request->product_quantity[$i];
                    $stock->save();
                }

            } 
        }

        return redirect('/manage/product/purchase')->with('message','Product Purchase Successfully.');
        
    }

    public function editPurchaseProduct($id){
        $suppliers = Supplier::all();
        $products = product::all();
        $locations = Location::all();
        $product_purchase = product_purchase::find($id);








        $product_purchase_details = product_purchase_details::where('purchase_id',$product_purchase->id)->get();
        return view('admin.purchase-product.edit-purchase-product',[
            'product_purchase' => $product_purchase,
            'product_purchase_details'         => $product_purchase_details,
            'suppliers' => $suppliers,
            'products' => $products,
            'locations' => $locations,
        ]);
    }

    public function updatePurchaseProduct(Request $request){
        $inputs = Input::except(['_token','challan_no','purchase_date','total_discount','grand_total_price','supplier_id','status','purchase_details','payment_type',]);

        $product_purchase =  product_purchase::find($request->purchase_id);
        $product_purchase->challan_no = $request->challan_no;
        $product_purchase->supplier_id = $request->supplier_id;
        $product_purchase->status = $request->status;
        $product_purchase->purchase_details = $request->purchase_details;
        $product_purchase->purchase_date = $request->purchase_date;
        $product_purchase->payment_type = $request->payment_type;
       
        $grand_total = 0;
        // $dis_percent = 0;
        
        if(count($inputs) > 0){
            for($i = 0; $i < count($inputs['product_quantity']); $i++){
                $total_price =  $request->product_quantity[$i] * $request->product_rate[$i];;
                $grand_total += $total_price;
            } 
        }
        
        $total_discount = $grand_total *  $request->dis_percent;
        $total_discount = $total_discount/100;
        $product_purchase->total_discount = $total_discount;
        $product_purchase->grand_total_amount = $grand_total - $total_discount;
        $product_purchase->save();

        if(count($inputs) > 0){
            for($i = 0; $i < count($inputs['product_quantity']); $i++){
                $detail =  product_purchase_details::find($request->purchase_details_id[$i]);


                $stock = Stock::where('product_id',$detail->product_id)->first();
                if(!empty($stock)){
                    $stock->purchase_qty  -=  $detail->quantity;
                    $stock->save();
                    $stock->purchase_qty  +=  $request->product_quantity[$i];
                    $stock->save();
                }else{
                    $stock  = new Stock();
                    $stock->product_id  = $request->products_id[$i];
                    $stock->purchase_qty  = $request->product_quantity[$i];
                    $stock->save();
                }


                $detail->purchase_id = $product_purchase->id;
                $detail->inventory_id = $request->inventory_id;
                $detail->product_id = $request->products_id[$i];
                $detail->quantity = $request->product_quantity[$i];
                $detail->rate = $request->product_rate[$i];

                $total_price =  $request->product_quantity[$i] * $request->product_rate[$i];

                $discount =  $total_price * $request->dis_percent;
                $discount = $discount/100;
                $detail->discount = $discount ;
                $detail->total_amount = $total_price -$discount;
                $detail->save();

                

            } 
        }

        return redirect('/manage/product/purchase')->with('message','Product Purchase Updated Successfully.');
    }

    public function deletePurchaseProduct($id){
        $product_purchase = product_purchase::find($id);
        $product_purchase_details = product_purchase_details::where('purchase_id',$product_purchase->id)->get();

        foreach($product_purchase_details as $purchase_details){
            $stock = Stock::where('product_id',$purchase_details->product_id)->first();
            $stock->purchase_qty  -=  $purchase_details->quantity;
            $stock->save();
            $purchase_details->delete();
        }
        $product_purchase->delete();

        return redirect('/manage/product/purchase')->with('message','Product Purchase Deleted Successfully.');
    }


}//end of class
