<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\customer_info;
use App\Location;
use App\Product;
use App\invoice;
use App\invoice_details;
use App\Stock;
use Illuminate\Support\Facades\Input;

class invoiceController extends Controller
{
    public function index() {
        $day = Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $timestemp)->day;
        dd($day);
    	return view('admin.invoice.invoiceNew');
    }

    public function create() {
        $products = Product::all();
        $locations = Location::all();
        $customer_info = customer_info::all();
    	return view('admin.invoice.invoiceNew', [
            'customer_info' => $customer_info,
            'locations' => $locations,
            'products' => $products,
        ]);
    }
    public function save(Request $request){
        // return $request->all();
        $inputs = Input::except(['_token','customer_id','payment_type','inventory_id','status','invoice_details']);
        // check product availability 
        for($i = 0 ; $i < count($inputs['product_quantity']); $i++){
            $stock = Stock::where('product_id',$request->product_id[$i])->first();
            if(  $request->product_quantity[$i] > $stock->purchase_qty){
                return back()->with('message','Unavailable Product Quantity..');
            }        
        }


        $invoice = new invoice();
        $invoice->date = $request->date;
        $invoice->customer_id = $request->customer_id;
        $invoice->payment_type = $request->payment_type;
        $invoice->status = $request->status;
        $invoice->inventory_id = $request->inventory_id;
        $invoice->invoice_details = $request->invoice_details;
        //grand total
        $grand_total = 0;
        if(count($request->product_quantity) > 0){
            for($i = 0; $i < count($request->product_quantity); $i++){
                $grand_total  = $request->product_quantity[$i] * $request->product_rate[$i] ;
                $grand_total  += $grand_total;
            }
        }
       
        //dis one
        $discount_one =($grand_total *  $request->discount_per)/100;
        $invoice->total_discount = $discount_one;
        $grand_total =  $grand_total - $discount_one;
        //dis two
        $discount_two = ($grand_total *  $request->multi_dis)/100;
        $invoice->total_discount_two = $discount_two ;
        $grand_total = $grand_total - $discount_two ;
        
        $invoice->total_amount = $grand_total;
        $invoice->save();

        if(count($inputs) > 0){
            for($i = 0 ; $i < count($inputs['product_quantity']); $i++){
                $invoice_details = new invoice_details();
                $invoice_details->invoice_id = $invoice->id;
                $invoice_details->product_id = $request->product_id[$i];
                $invoice_details->quantity = $request->product_quantity[$i];
                $invoice_details->rate = $request->product_rate[$i];
                $total_price = $request->product_quantity[$i] * $request->product_rate[$i];
                
                $discount_one = ($total_price * $request->discount_per)/100;

                $total_price = $total_price - $discount_one; 

                $discount_two = ($total_price *  $request->multi_dis)/100;

                $total_price = $total_price - $discount_two;

                $invoice_details->discount = $discount_one + $discount_two ;

                $invoice_details->total_price = $total_price;

                $invoice_details->save();
                // stock manage
                $stock = Stock::where('product_id',$request->product_id[$i])->first();
                $stock->purchase_qty -= $request->product_quantity[$i];
                $stock->sell_qty += $request->product_quantity[$i];
                $stock->save();
            }
        }
        return redirect('/manage/product/purchase')->with('message','Product Purchase Successfully.');

    }


}
