
@extends('admin.master')

@section('title')
	purchase product
@endsection

@section('mainContent')

<br>
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="column">

                    <a href="{{ url('/product/manage') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> Manage Purchase Product </a>

                </div>
            </div>
        </div>
        <br>
            <form action="{{route('purchase.product')}}" class="form-vertical" id="insert_purchase" name="insert_purchase" enctype="multipart/form-data" method="post" accept-charset="utf-8" novalidate="novalidate">
                        {{csrf_field()}}
            <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label for="supplier_id" class="col-sm-4 col-form-label">Supplier : </label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="supplier_id" name="supplier_id" tabindex="3">
                                                        <option value="">--Select One--</option>
                                                        @foreach ($suppliers as $supplier)
                                                        <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label for="purchase_date" class="col-sm-4 col-form-label">Purchase Date : </label>
                                                <div class="col-sm-8">
                                                    <input type="date"  class="form-control"name="purchase_date"    />
                                                </div>
                                            </div>
                                        </div>
            
                                    </div>
            
                                    <div class="row">

                                            <div class="col-sm-6">
                                                    <div class="form-group row">
                                                        <label for="payment_type" class="col-sm-4 col-form-label">Payment Type : </label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control" id="payment_type" name="payment_type" >
                                                                <option value="">Select One</option>                                          
                                                                <option value="Due">Due </option>
                                                                <option value="Paid">Paid</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="col-sm-6">
                                                    <div class="form-group row">
                                                        <label for="unit" class="col-sm-4 col-form-label">Status : </label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control" id="unit" name="status" >
                                                                <option value="">Select One</option>                                          
                                                                <option value="1">Active</option>
                                                                <option value="0">Deactive</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                       
                                      
                                    </div>                        
                                    <div class="row">
                                            <div class="col-sm-6">
                                                    <div class="form-group row">
                                                        <label for="unit" class="col-sm-4 col-form-label">Sotre : </label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control" id="unit" name="inventory_id" >
                                                                <option value="">Select One</option>                                          
                                                                @foreach ($locations as $location)
                                                                <option value="{{$location->id}}">{{$location->name}}</option>
                                                                @endforeach
                                                               
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            <div class="col-sm-6">
                                                    <div class="form-group row">
                                                        <label for="challan_no" class="col-sm-4 col-form-label">Challan No : </label>
                                                        <div class="col-sm-8">
                                                            <input type="text"  class="form-control"  name="challan_no" placeholder="Challan No "  required />
                                                        </div>
                                                    </div>
                                                </div>
                                      
                                    </div>


                                    <div class="row">
                                            <div class="col-sm-12">
                                                <div class="form-group row">
                                                    <label for="purchase_details" class="col-sm-2 col-form-label">Purchase Details : <i class="text-danger">*</i> </label>
                                                    <div class="col-sm-10">
                                                        <textarea name="purchase_details" id="purchase_details" class="form-control" rows="4"></textarea>
                                                    </div>
                                                </div> 
                                            </div>
                                        
                                        </div>
          
         <hr style="border-top: 3px double #8c8b8b;">
                <div class="text-center"><h2>Supplier Invoice</h2></div>
                <div class="table-responsive" style="margin-top: 10px">
                    <table class="table table-bordered table-hover" id="purchaseTable">
                        <thead>
                             <tr>
                                 <th class="text-center" width="20%">Item code<i class="text-danger">*</i></th> 
                                    <th class="text-center" width="20%">Item Information<i class="text-danger">*</i></th> 
                                    <th class="text-center">Stock/Qnt</th>
                                    <th class="text-center">Qnty <i class="text-danger">*</i></th>
                                    <th class="text-center">Rate<i class="text-danger">*</i></th>
                                    <th class="text-center">Total</th>
                                    <th class="text-center">Action</th>
                                </tr>
                        </thead>
                        <tbody id="addPurchaseItem">
                            <tr>
                                <td class="span3 supplier">
                                        <select class="form-control" id="unit" name="products_id[]" >
                                                <option value="">Select One</option>                                          
                                                @foreach ($products as $product)
                                                <option value="{{$product->id}}">{{$product->product_name}}</option>
                                                @endforeach
                                               
                                            </select>
                                   <input type="hidden" name="product_code" required="" class="form-control product_code productSelection" onkeypress="product_pur_or_list(1);" placeholder="Item code" id="product_code_1" tabindex="5" aria-required="true" autocomplete="off">

                                    <input type="hidden" class="autocomplete_hidden_value product_id_1" name="product_id[]" id="SchoolHiddenId" autocomplete="off">

                                    <input type="hidden" class="sl" value="1" autocomplete="off">
                                </td>
                                <td class="span3 ">
                                   <input type="text" name="product_name" class="form-control product_name " placeholder="Item Name" id="product_name_1" tabindex="5" readonly="" autocomplete="off">
                                   
                                </td>

                               <td class="wt">
                                        <input type="text" id="available_quantity_1" class="form-control text-right stock_ctn_1" placeholder="0.00" readonly="" autocomplete="off">
                                    </td>
                                
                                    <td class="text-right">
                                        <input type="text" name="product_quantity[]" id="cartoon_1" class="form-control text-right store_cal_1" onkeyup="calculate_store(1);" onchange="calculate_store(1);" placeholder="0.00" value="" min="0" tabindex="6" autocomplete="off">
                                    </td>
                                    <td class="test">
                                        <input type="text" name="product_rate[]" onkeyup="calculate_store(1);" onchange="calculate_store(1);" id="product_rate_1" class="form-control product_rate_1 text-right" placeholder="0.00" value="" min="0" tabindex="7" autocomplete="off">
                                    </td>
                                   

                                    <td class="text-right">
                                        <input class="form-control total_price text-right" type="text" name="total_price[]" id="total_price_1" value="0.00" readonly="readonly" autocomplete="off">
                                    </td>
                                    <td>

                                       

                                        <button style="text-align: right;" class="btn btn-danger red" type="button" value="Delete" disabled  tabindex="8" autocomplete="off">Delete</button>
                                    </td>
                            </tr>
                        </tbody>
                        <tfoot>
                                     <tr>
                               
                                <td style="text-align:right;" colspan="5"><b>Total:</b></td>
                                <td class="text-right">
                                    <input type="text" id="total" class="text-right form-control" name="total" value="0.00" readonly="readonly" autocomplete="off">
                                </td>

                            </tr>
                            <tr>
                               
                                <td style="text-align:right;" colspan="4"><b>Cash Disount %</b></td>
                                <td><input type="text" id="dis_p" name="dis_percent" class="form-control text-right" onkeyup="calculate_store(1);" onchange="calculate_store(1);" placeholder="0.00" autocomplete="off"></td>
                                <td class="text-right">
                                    <input type="text" id="tdiscount" class="text-right form-control" name="tdiscount" value="0.00" readonly="readonly" autocomplete="off">
                                </td>

                            </tr>
                            <tr>
                                <td colspan="2">
                                    <input type="button" id="add_invoice_item" class="btn btn-info" name="add-invoice-item" onclick="addPurchaseOrderField1('addPurchaseItem');" value="Add New Item" tabindex="9" autocomplete="off">
                                    <input type="hidden" name="baseUrl" class="baseUrl" value="http://www.dynomotorsbd.com/" autocomplete="off">
                                </td>
                                <td style="text-align:right;" colspan="3"><b>Grand Total:</b></td>
                                <td class="text-right">
                                    <input type="text" id="grandTotal" class="text-right form-control" name="grand_total_price" value="0.00" readonly="readonly" autocomplete="off">
                                </td>
                            </tr>
                            <tr><td colspan="6"><b>In Word : :</b> <span id="inword"></span></td></tr>
                        </tfoot>
                    </table>
                </div>

              

                <div class="form-group row">
                    <div class="col-sm-6">
                        <input type="submit" id="add_purchase" class="btn btn-primary btn-large" value="Submit" autocomplete="off">
                     </div>
                </div>
            </form>

<!-- Add Product End -->
@endsection

 


  

@push('script')

        <script src="{{asset('admin/assets/js/product_purchase.js.php')}}"></script>
        <script src="{{asset('admin/assets/js/numberconverter.js')}}"></script>
        <script src="{{asset('admin/assets/js/purchase.js')}}"></script>

<script>

    // Counts and limit for purchase order
      var count = 2;
      var limits = 500;
    
      function addPurchaseOrderField1(divName){
    
    
          if (count == limits)  {
              alert("You have reached the limit of adding " + count + " inputs");
          }
          else{
              var newdiv = document.createElement('tr');
              var tabin="product_code_"+count;
               tabindex = count * 4 ,
             newdiv = document.createElement("tr");
              tab1 = tabindex + 1;
              tab2 = tabindex + 2;
              tab3 = tabindex + 3;
              tab4 = tabindex + 4;
              tab5 = tabindex + 5;
              tab6 = tab5 + 1;
              tab7 = tab6 +1;
             
    
    
              newdiv.innerHTML ='<td class="span3 supplier">'+
                    '<select class="form-control" id="unit" name="products_id[]" >'+
                                                '<option value="">Select One</option>'+                                          
                                                '@foreach ($products as $product)'+
                                                '<option value="{{$product->id}}">{{$product->product_name}}</option>'+
                                                '@endforeach'+
                                            '</select>'+
              '<input type="hidden" name="product_code" required class="form-control product_code productSelection" onkeypress="product_pur_or_list('+ count +');" placeholder="Item code" id="product_code_'+ count +'" tabindex="'+tab1+'" > <input type="hidden" class="autocomplete_hidden_value product_id_'+ count +'" name="product_id[]" id="SchoolHiddenId"/>  <input type="hidden" class="sl" value="'+ count +'">  </td> <td class="span3 "><input type="text" name="product_name" class="form-control product_name " placeholder="Item Name" id="product_name_'+ count +'" tabindex="5" readonly> </td>  <td class="wt"> <input type="text" id="available_quantity_'+ count +'" class="form-control text-right stock_ctn_'+ count +'" placeholder="0.00" readonly/> </td><td class="text-right"><input type="text" name="product_quantity[]" tabindex="'+tab2+'" required  id="cartoon_'+ count +'" class="form-control text-right store_cal_' + count + '" onkeyup="calculate_store(' + count + ');" onchange="calculate_store(' + count + ');" placeholder="0.00" value="" min="0"/>  </td><td class="test"><input type="text" name="product_rate[]" onkeyup="calculate_store('+ count +');" onchange="calculate_store('+ count +');" id="product_rate_'+ count +'" class="form-control product_rate_'+ count +' text-right" placeholder="0.00" value="" min="0" tabindex="'+tab3+'"/></td><td class="text-right"><input class="form-control total_price text-right total_price_'+ count +'" type="text" name="total_price[]" id="total_price_'+ count +'" value="0.00" readonly="readonly" /> </td><td> <input type="hidden" id="total_discount_1" class="" /><input type="hidden" id="all_discount_1" class="total_discount" /><button style="text-align: right;" class="btn btn-danger red" type="button" value="Delete" onclick="deleteRow(this)" tabindex="8">Delete</button></td>';
              document.getElementById(divName).appendChild(newdiv);
              document.getElementById(tabin).focus();
              document.getElementById("add_invoice_item").setAttribute("tabindex", tab5);
              document.getElementById("add_purchase").setAttribute("tabindex", tab6);
           document.getElementById("add_purchase_another").setAttribute("tabindex", tab7);
             
              count++;
    
              $("select.form-control:not(.dont-select-me)").select2({
                  placeholder: "Select option",
                  allowClear: true
              });
          }
      }
    
      function deleteRow(row){
          var d = row.parentNode.parentNode.rowIndex;
          document.getElementById('purchaseTable').deleteRow(d);
       }
    
    
      //Calculate store product
      function calculate_store(sl) {
         
          var totle = 0;
          var gr_tot= 0;
          var item_ctn_qty    = $("#cartoon_"+sl).val();
          var vendor_rate = $("#product_rate_"+sl).val();
          var discount_per = $("#dis_p").val();
          var total_price     = item_ctn_qty * vendor_rate;
          $("#total_price_"+sl).val(total_price.toFixed(2));
    
         
          //Total Price
          $(".total_price").each(function() {
              isNaN(this.value) || 0 == this.value.length || (totle += parseFloat(this.value))
          });
    
          $("#total").val(totle.toFixed(2,2));
          var total_dicount = (totle*discount_per)/100;
           $("#tdiscount").val(total_dicount.toFixed(2));
           var gr_tot = totle-total_dicount;
            $("#grandTotal").val(gr_tot.toFixed(2));
          var inwords = convertNumberToWords(gr_tot);
         document.getElementById("inword").innerHTML = inwords;
      }



    </script>

@endpush