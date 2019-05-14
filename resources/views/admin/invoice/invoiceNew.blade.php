@extends('admin.master')

@section('title')
	Add New Invoice
@endsection

@section('mainContent')

<script type="text/javascript">
    $(document).ready(function () {
        $("form :input").attr("autocomplete", "off");
    })
</script>
<script src="http://softest8.bdtask.com/saleserp_multistor/my-assets/js/admin_js/json/product_invoice.js.php" ></script>
<!-- Invoice js -->
<script src="http://softest8.bdtask.com/saleserp_multistor/my-assets/js/admin_js/invoice.js" type="text/javascript"></script>

<!-- Add new invoice start -->
<style>
    #bank_info_hide
    {
        display:none;
    }
    #payment_from_2
    {
        display:none;
    }
</style>

<!-- Customer type change by javascript start -->
<script type="text/javascript">
    function bank_info_show(payment_type)
    {
        if (payment_type.value == "1") {
            document.getElementById("bank_info_hide").style.display = "none";
        } else {
            document.getElementById("bank_info_hide").style.display = "block";
        }
    }

    function active_customer(status)
    {
        if (status == "payment_from_2") {
            document.getElementById("payment_from_2").style.display = "none";
            document.getElementById("payment_from_1").style.display = "block";
            document.getElementById("myRadioButton_2").checked = false;
            document.getElementById("myRadioButton_1").checked = true;
        } else {
            document.getElementById("payment_from_1").style.display = "none";
            document.getElementById("payment_from_2").style.display = "block";
            document.getElementById("myRadioButton_2").checked = false;
            document.getElementById("myRadioButton_1").checked = true;
        }
    }
</script>
<!-- Customer type change by javascript end -->
<!-- Alert Message -->
<div class="row">
    <div class="col-sm-12">
    @if(Session::has('message'))
        <div class="alert alert-info alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert">&times;</button>
            <div class="text-center" style="font-size: 18px; padding: 9px; border: 2px solid #00B1E6;">
             {{ Session::get('message') }}
            </div>
        </div>
    @endif
    </div>
</div>
<!-- end Message -->
<!-- Add New Invoice Start -->
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2" style="background: #FFFFFF; margin-top: -8px;">
        <div class="col-sm-9">
            <h3 class="page-title">Add New Invoice</h3>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Invoice</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add New Invoice</li>
         </ol>
       </div>
       <div class="col-sm-3">
       <div class="btn-group float-sm-right pt-3">
        <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
        <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
        <span class="caret"></span>
        </button>
      </div>
     </div>
     </div><br>
    <!-- End Breadcrumb-->
<div class="row mb-2">
            <div class="col-sm-12">
                <div class="column">
                    <a href="{{ url('/invoice/manage') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i> Manage Invoice </a>
                    <a href="{{ url('/invoice/pos') }}" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>  POS Invoice </a>

                </div>
            </div>
</div>

    <section class="content">
        <!--Add Invoice -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>New Invoice</h4>
                            <hr>
                        </div>
                    </div>
                    <form action="{{url('/invoice/save')}}" class="form-vertical" id="" name="" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                    @csrf
                        <div class="card-body">
                        <div class="row">
                                <div class="col-sm-6" id="payment_from_1">
                                        <div class="form-group row">
                                            <label for="payment_type" class="col-sm-4 col-form-label">Select Customer<i class="text-danger">*</i></label>
                                            <div class="col-sm-8">
                                                <select name="customer_id" class="form-control" required="">
                                                    <option value="">Select Customer</option>
                                                    @forelse ($customer_info as $customer)
                                                    <option value="{{$customer->id}}">{{$customer->customer_name}}</option>
                                                    @empty
                                                    <option >No Customer Available</option>
                                                    @endforelse
                                                    
                                                    
                                                </select>                                     
                                            </div>
                                        </div>
                          </div>
                          <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label">Date <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input class="datepicker form-control" type="date"  name="date" id="date" required  />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="payment_type" class="col-sm-4 col-form-label">Payment Type <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select name="payment_type" class="form-control" required="">
                                            <option value="">Select Payment Option</option>
                                            <option value="Cash">Cash Payment</option>
                                            <option value="Due">Due Payment</option>
                                        </select>                                     
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6" id="payment_from_1">
                                    <div class="form-group row">
                                        <label for="status" class="col-sm-4 col-form-label">Select Status <i class="text-danger">*</i></label>
                                        <div class="col-sm-8">
                                            <select name="status" class="form-control" required="">
                                                <option value="">Select Status</option>
                                                <option value="0">Active</option>
                                                <option value="1">Inactive</option>
                                            </select>                                     
                                        </div>
                                    </div>
                                </div>

                			
                          
                            <div class="col-sm-6" id="payment_from_1">
                                    <div class="form-group row">
                                        <label for="inventory_id" class="col-sm-4 col-form-label">Select Store <i class="text-danger">*</i></label>
                                        <div class="col-sm-8">
                                            <select name="inventory_id" class="form-control" required="">
                                                <option value="">Select Store</option>
                                                @forelse ($locations as $location)
                                                <option value="{{$location->id}}">{{$location->name}}</option>
                                                @empty
                                                <option >No Customer Available</option>
                                                @endforelse
                                                
                                                
                                            </select>                                     
                                        </div>
                                    </div>
                      </div>

                      <div class="col-sm-12" id="payment_from_1">
                            <div class="form-group row">
                                <label for="customer_name" class="col-sm-2 col-form-label">Invoice Detail <i class="text-danger">*</i></label>
                                <div class="col-sm-10">
                                    <textarea name="invoice_details" class="form-control" cols="10" rows="5"></textarea>
                                </div>
                             
                            </div>
                        </div>
                       



                        </div>
                        <hr style="border: 2">
                        <div class="text-center"><h3>Sales Invoice # 1004</h3></div>
                        <div class="row">                           
                        </div>
                        <div class="table-responsive" style="margin-top: 10px">
                            <table class="table table-bordered table-hover" id="normalinvoice">
                                <thead>
                                    <tr>
                                        <th class="text-center">Product</th>
                                        <th class="text-center" style="width: 220px">Item Information <i class="text-danger">*</i></th>
                                        <th class="text-center">Av. Qnty.</th>
                                        
                                        <th class="text-center">Qnty <i class="text-danger">*</i></th>
                                        <th class="text-center">Rate <i class="text-danger">*</i></th>
                                        <th class="text-center">Total 
                                        </th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="addinvoiceItem">
                                    <tr>
                                         <td>
                                             <select name="product_id[]" class="form-control">
                                                 <option value="">Select Product</option>
                                                 @foreach ($products as $product)
                                                     <option value="{{$product->id}}">{{$product->product_name}}</option>
                                                 @endforeach
                                             </select>
                                            <input name="product_code" type="hidden" id="product_code" class="form-control text-left productSelection" value="" onkeypress="invoice_productList(1);"  type="text" placeholder="item code">
                                             <input type="hidden" class="autocomplete_hidden_value product_id_1" name="products_id[]" id="SchoolHiddenId"/>

                                        </td>
                                        <td style="width: 220px">
                                            <input type="text" name="product_name" class="form-control product_name_1" placeholder='Item Name' required="" id="product_name_1" tabindex="7" readonly='readonly'>

                                           
                                            <input type="hidden" class="baseUrl" value="http://softest8.bdtask.com/saleserp_multistor/" />
                                        </td>
                                        <td>
                                            <input type="text" name="available_quantity[]" class="form-control text-right available_quantity_1" value="0" readonly="" />
                                        </td>
                                       
                                        <td>
                                            <input type="text" name="product_quantity[]" onkeyup="quantity_calculate(1);" onchange="quantity_calculate(1);" class="total_qntt_1 form-control text-right" id="total_qntt_1" placeholder="0.00" min="0" tabindex="8" required="required"/>
                                        </td>
                                        <td style="width: 140px">
                                            <input type="text" name="product_rate[]" id="price_item_1" class="price_item1 price_item form-control text-right" tabindex="9" required="" onkeyup="quantity_calculate(1);" onchange="quantity_calculate(1);" placeholder="0.00" min="0" />
                                        </td>
                                        <!-- Discount -->
                                      <td style="width: 100px">
                                            <input class="total_price form-control text-right" type="text" name="total_price[]" id="total_price_1" value="0.00" readonly="readonly" />
                                        </td>

                                        <td>
                                           
                                        </td>
                                    </tr>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <td colspan="5"  style="text-align:right;"><b>Total:</b></td>
                                    <td class="text-right" style="width: 150px;">
                                        <input type="text" id="total" class="form-control text-right" name="total" value="0.00"  />
                                    </td>
                                   
                                </tr>
                                 <tr>
                                    <td colspan="4"  style="text-align:right;"><b>Discount %</b></td>
                                    <td class="text-right">
                                        <input type="text" id="discount" class="form-control text-right" name="discount_per" onkeyup="quantity_calculate(1);" onchange="quantity_calculate(1);" placeholder="0.00" />
                                    </td>
                                     <td class="text-right">
                                        <input type="text" id="total_dicount" class="form-control text-right" name="total_dicount" value="0.00" readonly="" />
                                    </td>
                                   
                                </tr>
                                 <tr>
                                    <td colspan="4"  style="text-align:right;"><b>Multi Discount%</b></td>
                                    <td class="text-right">
                                        <input type="text" id="vat_per" class="form-control text-right" name="multi_dis" onkeyup="quantity_calculate(1);" onchange="quantity_calculate(1);" value="" placeholder="0.00" />
                                    </td>
                                    <td class="text-right">
                                        <input type="text" id="total_vat" class="form-control text-right" name="total_vat" value="0.00" readonly="" />
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td colspan="4"  style="text-align:right;"><b>Vat%</b></td>
                                    <td class="text-right">
                                        <input type="text" id="tax_per" class="form-control text-right" name="vat_per" value=""  onkeyup="quantity_calculate(1);" onchange="quantity_calculate(1);" placeholder="0.00" />
                                    </td>
                                    <td class="text-right">
                                        <input type="text" id="total_tax" class="form-control text-right" name="total_tax" value="0.00" readonly="" />
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td colspan="5"  style="text-align:right;"><b>Old Battery Deposit</b></td>
                                    <td class="text-right">
                                        <input type="text" id="oldbatdp" class="form-control text-right" name="oldbatterydeposit" value="" onkeyup="quantity_calculate(1);" onchange="quantity_calculate(1);" placeholder="0.00" />
                                    </td>
                                   
                                   
                                </tr>
                                <tr>
                                    <td colspan="5"  style="text-align:right;"><b>Grand Total:</b></td>
                                    <td class="text-right">
                                        <input type="text" id="grandTotal" class="form-control text-right" name="grand_total_price" value="0.00" readonly="readonly" />
                                    </td>
                                    <td> <input type="button" id="add_invoice_item" class="btn btn-info"  name="add-invoice-item"  onClick="addInputField('addinvoiceItem');" value="Add More" tabindex="12"/></td>
                                </tr>                              
                                <tr>
                                    <td align="right" colspan="7">
                                        <input type="submit" id="add_invoice" class="btn btn-primary" name="add-invoice" value="Submit" tabindex="15"/>
                                    </td>                                
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    </form>                
                </div>
            </div>
        </div>
    </section>

<!-- Invoice Report End -->
 <script type="text/javascript">

    function customer_due(id){
        $.ajax({
            url: 'http://softest8.bdtask.com/saleserp_multistor/Cinvoice/previous',
            type: 'post',
            data: {customer_id:id}, 
            success: function (msg){
                  obj = JSON.parse(msg);
                $("#previous").val(obj.previous);
                $("#cname").val(obj.cname);
                $("#address").val(obj.address);
                $("#vechicle_no").val(obj.vehicle);


            },
            error: function (xhr, desc, err){
                 alert('failed');
            }
        });        
    }
</script>

<script type="text/javascript">
    $('.ac').click(function () {
        $('.customer_hidden_value').val('');
    });
    $('#myRadioButton_1').click(function () {
        $('#customer_name').val('');
    });

    $('#myRadioButton_2').click(function () {
        $('#customer_name_others').val('');
    });
    $('#myRadioButton_2').click(function () {
        $('#customer_name_others_address').val('');
    });

</script>
<script type="text/javascript">

function customer_autocomplete(sl) {

    var customer_id = $('#customer_id').val();
    // Auto complete
    var options = {
        minLength: 0,
        source: function( request, response ) {
            var customer_name = $('#customer_name').val();
         
        $.ajax( {
          url: "http://softest8.bdtask.com/saleserp_multistor/Cinvoice/customer_autocomplete",
          method: 'post',
          dataType: "json",
          data: {
            term: request.term,
            customer_id:customer_name,
          },
          success: function( data ) {
              // alert(data);
            response( data );

          }
        });
      },
       focus: function( event, ui ) {
           $(this).val(ui.item.label);
           return false;
       },
       select: function( event, ui ) {
            $(this).parent().parent().find("#autocomplete_customer_id").val(ui.item.value); 
            var customer_id          = ui.item.value;
            customer_due(customer_id);

            $(this).unbind("change");
            return false;
       }
   }

   $('body').on('keydown.autocomplete', '#customer_name', function() {
       $(this).autocomplete(options);
   });

}
//Add Input Field Of Row
function addInputField(t) {
    var row = $("#normalinvoice tbody tr").length;
    var count = row + 1;
    var limits = 500;
    if (count == limits)
        alert("You have reached the limit of adding " + count + " inputs");
    else {
        var a = "product_code" + count,
                tabindex = count * 5,
                e = document.createElement("tr");
        //e.setAttribute("id", count);
        tab1 = tabindex + 1;
        tab2 = tabindex + 2;
        tab3 = tabindex + 3;
        tab4 = tabindex + 4;
        tab5 = tabindex + 5;
        tab6 = tabindex + 6;
        e.innerHTML = '<td><select name="product_id[]" class="form-control">'+
                                                ' <option value="">Select Product</option>'+
                                                ' @foreach ($products as $product)'+
                                                    ' <option value="{{$product->id}}">{{$product->product_name}}</option>'+
                                                 '@endforeach'+
                                             '</select>'+
        "<input  name='product_code' id='" + a + "' tabindex='" + tab1 + "' class='form-control text-left productSelection common_product' value='' onkeypress='invoice_productList(" + count + ");'  type='hidden' placeholder='item code'><input type='hidden' class='common_product autocomplete_hidden_value  product_id_" + count + "' name='products_id[]' id='SchoolHiddenId'/></td><td><input type='text' name='product_name' class='form-control product_name_" + count + "' placeholder='item name' readonly='readonly' id='product_name_" + count + "' ></td>   <td><input type='text' name='available_quantity[]' id='' class='form-control text-right common_avail_qnt available_quantity_" + count + "' value='0' readonly='readonly' /></td><td> <input type='text' name='product_quantity[]' required='required' onkeyup='quantity_calculate(" + count + ");' onchange='quantity_calculate(" + count + ");' id='total_qntt_" + count + "' class='common_qnt total_qntt_" + count + " form-control text-right'  placeholder='0.00' min='0' tabindex='" + tab2 + "'/></td><td><input type='number' name='product_rate[]' onkeyup='quantity_calculate(" + count + ");' onchange='quantity_calculate(" + count + ");' id='price_item_" + count + "' class='common_rate price_item" + count + " form-control text-right' required placeholder='0.00' min='0' tabindex='" + tab3 + "'/></td><td class='text-right'><input class='common_total_price total_price form-control text-right' type='text' name='total_price[]' id='total_price_" + count + "' value='0.00' readonly='readonly'/></td><td><button tabindex='" + tab5 + "' style='text-align: right;' class='btn btn-danger' type='button' value='Delete' onclick='deleteRow(this)'><i class='fa fa-close'></i></button></td>",
                document.getElementById(t).appendChild(e),
                document.getElementById(a).focus(),
                document.getElementById("add_invoice_item").setAttribute("tabindex", tab6);
        count++
    }
}
//Quantity calculat
function quantity_calculate(item) {
//    alert(item);
    var quantity = $("#total_qntt_" + item).val();
    var available_quantity = $(".available_quantity_" + item).val();
    var price_item = $("#price_item_" + item).val();
    // var invoice_discount = $("#invoice_discount").val();
    
//    alert(available_quantity);
    if (parseInt(quantity) > parseInt(available_quantity)) {
        var message = "You can purchase maximum " + available_quantity + " Items";
        alert(message);
    }

        var n = quantity * price_item;  
        $("#total_price_" + item).val(n);
   
    calculateSum();

}
//Calculate Sum
function calculateSum() {
    var t = 0;
    var dis = 0;
    var vatamount = 0;
    var taxamount = 0;

            //Total Price
            $(".total_price").each(function () {
        isNaN(this.value) || 0 == this.value.length || (t += parseFloat(this.value))
    }),

        
    $("#total").val(t.toFixed(2, 2));

     var dis_per = $("#discount").val();
     var dis = (t*dis_per)/100;
      $("#total_dicount").val(dis.toFixed(2, 2));
      var amount_withoutdis = t - dis;
      var vat_per = $("#vat_per").val();
      var vatamount = (vat_per*amount_withoutdis)/100;
      $("#total_vat").val(vatamount.toFixed(2, 2));
      var tax_per = $("#tax_per").val();
      var taxamount = (tax_per*amount_withoutdis)/100;
     $("#total_tax").val(taxamount.toFixed(2, 2));
    var oldbatterydp = $("#oldbatdp").val();
    var grandtotalamount = amount_withoutdis + vatamount + taxamount - oldbatterydp;
     $("#grandTotal").val(grandtotalamount.toFixed(2, 2))
}

//Invoice Paid Amount
function invoice_paidamount() {
    var  prb = parseInt($("#previous").val(), 10);
    if(prb > 0){
        pr =  prb;
    }else{
        pr = 0;
    }
    var t = $("#grandTotal").val(),
            a = $("#paidAmount").val(),
            e = t - a,
            f = e + pr,
            nt = parseInt(t, 10) + pr;
          
    $("#dueAmmount").val(f.toFixed(2, 2))
     $("#n_total").val(nt.toFixed(2, 2));
}
// function shippingCost(){
   
//         var t = $("#grandTotal").val();
// alert(t);
//     //         a = $("#shipping_cost").val(),
//     //         e = +t+ + a;
          
//     // $("#grandTotal").val(e);
// }
//Stock Limit
function stockLimit(t) {
    var a = $("#total_qntt_" + t).val(),
            e = $(".product_id_" + t).val(),
            o = $(".baseUrl").val();

    $.ajax({
        type: "POST",
        url: o + "Cinvoice/product_stock_check",
        data: {
            product_id: e
        },
        cache: !1,
        success: function (e) {
            alert(e);
            if (a > Number(e)) {
                var o = "You can purchase maximum " + e + " Items";
                alert(o), $("#qty_item_" + t).val("0"), $("#total_qntt_" + t).val("0"), $("#total_price_" + t).val("0")
            }
        }
    })
}

function stockLimitAjax(t) {
    var a = $("#total_qntt_" + t).val(),
            e = $(".product_id_" + t).val(),
            o = $(".baseUrl").val();
            
    $.ajax({
        type: "POST",
        url: o + "Cinvoice/product_stock_check",
        data: {
            product_id: e
        },
        cache: !1,
        success: function (e) {
            alert(e);
            if (a > Number(e)) {
                var o = "You can purchase maximum " + e + " Items";
                alert(o), $("#qty_item_" + t).val("0"), $("#total_qntt_" + t).val("0"), $("#total_price_" + t).val("0.00"), calculateSum()
            }
        }
    })
}

//Invoice full paid
function full_paid() {
    var grandTotal = $("#n_total").val();
    $("#paidAmount").val(grandTotal);
    invoice_paidamount();
    calculateSum();
}

//Delete a row of table
function deleteRow(t) {
    var a = $("#normalinvoice > tbody > tr").length;
//    alert(a);
    if (1 == a)
        alert("There only one row you can't delete.");
    else {
        var e = t.parentNode.parentNode;
        e.parentNode.removeChild(e),
                calculateSum();
        invoice_paidamount();
//        alert(a);
        var current = 1;
        $("#normalinvoice > tbody > tr td input.productSelection").each(function () {
            current++;
            $(this).attr('id', 'product_name' + current);
        });
        var common_qnt = 1;
        $("#normalinvoice > tbody > tr td input.common_qnt").each(function () {
            common_qnt++;
            $(this).attr('id', 'total_qntt_' + common_qnt);
            $(this).attr('onkeyup', 'quantity_calculate('+common_qnt+');');
            $(this).attr('onchange', 'quantity_calculate('+common_qnt+');');
        });
        var common_rate = 1;
        $("#normalinvoice > tbody > tr td input.common_rate").each(function () {
            common_rate++;
            $(this).attr('id', 'price_item_' + common_rate);
            $(this).attr('onkeyup', 'quantity_calculate('+common_qnt+');');
            $(this).attr('onchange', 'quantity_calculate('+common_qnt+');');
        });
       
        var common_total_price = 1;
        $("#normalinvoice > tbody > tr td input.common_total_price").each(function () {
            common_total_price++;
            $(this).attr('id', 'total_price_' + common_total_price);
        });




    }
}
var count = 2,
        limits = 500;
//$('body').on('keyup', '#invoice_discount', function () {
//    var invoiceDis = $("#invoice_discount").val();
//    var ttlDis = $("#total_discount_ammount").val();
//    var xx = invoiceDis * ttlDis;
//    alert(xx);
//})

</script>

@endsection
     