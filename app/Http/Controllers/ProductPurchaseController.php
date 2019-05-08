<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Supplier;
use App\product;
use App\Location;
use App\product_purchase;
use App\product_purchase_details;
use Illuminate\Support\Facades\Input;


class ProductPurchaseController extends Controller
{
    //
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

        $inputs = Input::except(['_token','challan_no','purchase_date','total_discount','grand_total_amount','supplier_id','status','purchase_details','payment_type',]);

        $product_purchase = new product_purchase();
        $product_purchase->challan_no = $request->challan_no;
        $product_purchase->supplier_id = $request->supplier_id;
        $product_purchase->status = $request->status;
        $product_purchase->purchase_details = $request->purchase_details;
        $product_purchase->purchase_date = $request->purchase_date;
        $product_purchase->payment_type = $request->payment_type;
        $product_purchase->grand_total_amount = $request->grand_total_amount;
        $product_purchase->total_discount = $request->total_discount;
        $product_purchase->save();


        if(count($inputs) > 0){
            for($i = 0; $i < count($inputs['quantity']); $i++){
                $detail = new product_purchase_details();
                $detail->purchase_id = $product_purchase->id;
                $detail->inventory_id = $request->inventory_id;
                $detail->product_id = $request->product_id[$i];
                $detail->quantity = $request->quantity[$i];
                $detail->rate = $request->rate[$i];
                $detail->total_amount = $request->total_amount[$i];
                $discount =  $request->total_amount[$i] * $request->dis_percent;
                $discount = $discount/100;
                $detail->discount = $discount ;
                $detail->save();
            } 
        }
        
        
      

        
    }


}
