@extends('admin.master')

@section('title')
	Add New Invoice
@endsection

@section('mainContent')
<script type="text/javascript">
    $(document).ready(function () {
        $("form :input").attr("autocomplete", "off");
    })
</script>            <!-- Customer js php -->
<script src="http://softest8.bdtask.com/saleserp_multistor/my-assets/js/admin_js/json/customer.js.php" ></script>
<!-- Product invoice js -->
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

<!-- Add New Invoice Start -->
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2" style="background: #FFFFFF; margin-top: -8px;">
        <div class="col-sm-9">
            <h3 class="page-title">Add POS Invoice</h3>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Invoice</a></li>
            <li class="breadcrumb-item active" aria-current="page">Add POS Invoice</li>
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

    <section class="content">

        <!-- Alert Message -->
        
        <div class="row mb-2">
            <div class="col-sm-12">
                <div class="column">
                           <a href="{{ url('/invoice/new') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i> New Invoice </a>
                                    <a href="{{ url('/invoice/manage') }}" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>  Manage Invoice  </a>
                 </div>
            </div>
        </div>

        <!-- POS Invoice report -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">
                            <h4>New POS invoice</h4>
                            <hr>
                        </div>
                    </div>

                    <div class="card-body">
                       

                        <form action="http://softest8.bdtask.com/saleserp_multistor/Cinvoice/insert_invoice" class="form-vertical" id="" name="insert_pos_invoice" enctype="multipart/form-data" method="post" accept-charset="utf-8">
                         <div class="row">
                          <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="date" class="col-sm-4 col-form-label">Date <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input class="datepicker form-control" type="text" size="50" name="invoice_date" id="date" required value="2019-04-01" tabindex="6" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="payment_type" class="col-sm-4 col-form-label">Payment Type <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <select name="paytype" class="form-control" required="">
                                            <option value="">Select Payment Option</option>
                                            <option value="1">Cash Payment</option>
                                            <option value="2">Due Payment</option>
                                            
                                        </select>
                                      

                                     
                                    </div>
                                 
                                </div>
                            </div>

                <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="customer_name" class="col-sm-4 col-form-label">Mobile <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input type="text" size="100"  name="customer_name" class=" form-control" placeholder='Mobile' id="customer_name" tabindex="1" onkeyup="customer_autocomplete()" required/>

                                        <input id="autocomplete_customer_id" class="customer_hidden_value abc" type="hidden" name="customer_id">
                                    </div>
                                 
                                </div>
                            </div>
                             <div class="col-sm-6" id="name">
                                <div class="form-group row">
                                    <label for="payment_type" class="col-sm-4 col-form-label">Name <i class="text-danger"></i></label>
                                    <div class="col-sm-8">
                                        <input type="text" size="100"  name="name" class=" form-control" placeholder='Name' id="cname" tabindex="1" readonly/>

                                     
                                    </div>
                                 
                                </div>
                            </div>
                             <div class="col-sm-6" id="">
                                <div class="form-group row">
                                    <label for="address" class="col-sm-4 col-form-label">Address <i class="text-danger"></i></label>
                                    <div class="col-sm-8">
                                        <input type="text" size="100"  name="address" class=" form-control" placeholder='Address' id="address" tabindex="1" readonly/>

                                     
                                    </div>
                                 
                                </div>
                            </div>
                             <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="vechicle_no" class="col-sm-4 col-form-label">Vehicle No <i class="text-danger"></i></label>
                                    <div class="col-sm-8">
                                        <input type="text" size="100"  name="vechicle_no" class=" form-control" placeholder='Vehicle No' id="vechicle_no" tabindex="1" readonly/>

                                     
                                    </div>
                                 
                                </div>
                            </div>
                             <div class="col-sm-6" id="payment_from_1">
                                <div class="form-group row">
                                    <label for="previous" class="col-sm-4 col-form-label">Credit <i class="text-danger"></i></label>
                                    <div class="col-sm-8">
                                        <input type="text" size="100"  name="previous" class=" form-control" placeholder='Credit' id="previous" tabindex="1" readonly/>

                                     
                                    </div>
                                 
                                </div>
                            </div>
                            <div class="col-sm-6" id="location">
                                <div class="form-group row">
                                    <label for="location" class="col-sm-4 col-form-label">Location <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">

                                         <select name="location" class="form-control" required="" id="store_code">
                                            <option value="">Select Location</option>
                                            <option value="1234567">Demo Store</option>   
                                        </select>
                                        
                                     
                                    </div>
                                 
                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="add_item" class="col-sm-4 col-form-label">Barcode <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input type="text" name="product_name" class="form-control" placeholder='Barcode or QR-code scan here' id="add_item" autocomplete='off' tabindex="1">
                                        <input type="hidden" id="product_value" name="">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="table-responsive" style="margin-top: 10px">
                            <table class="table table-bordered table-hover" id="normalinvoice">
                                <thead>
                                    <tr>
                                        <th class="text-center" style="width: 220px">Item code <i class="text-danger">*</i></th>
                                        <th class="text-center" style="width: 220px">Item Information <i class="text-danger">*</i></th>
                                        <th class="text-center">Av. Qnty.</th>
                                        <th class="text-center">Qnty <i class="text-danger">*</i></th>
                                        <th class="text-center">Rate <i class="text-danger">*</i></th>
                                        <th class="text-center" style="width: 130px">Total</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody id="addinvoiceItem">
                                    <tr></tr>
                                </tbody>
                                <tfoot>
                              
                             
                                <tr>
                                    <td colspan="5"  style="text-align:right;"><b>Total:</b></td>
                                    <td class="text-right">
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
                                    <td colspan="4"  style="text-align:right;"><b>Vat%</b></td>
                                    <td class="text-right">
                                        <input type="text" id="vat_per" class="form-control text-right" name="vat_per" onkeyup="quantity_calculate(1);" onchange="quantity_calculate(1);" value="" placeholder="0.00" />
                                    </td>
                                    <td class="text-right">
                                        <input type="text" id="total_vat" class="form-control text-right" name="total_vat" value="0.00" readonly="" />
                                    </td>
                                   
                                </tr>
                                <tr>
                                    <td colspan="4"  style="text-align:right;"><b>Tax%</b></td>
                                    <td class="text-right">
                                        <input type="text" id="tax_per" class="form-control text-right" name="tax_per" value=""  onkeyup="quantity_calculate(1);" onchange="quantity_calculate(1);" placeholder="0.00" />
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
                        </form>                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- POS Invoice Report End -->
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

    //Onload filed select
    window.onload = function () {
        var text_input = document.getElementById('add_item');
        text_input.focus();
        text_input.select();
    }

    //Invoice js
    $('#add_item').keypress(function (e) {
        var product_id = String.fromCharCode(e.keyCode);
        // alert(res);
        //     var product_id = $(this).val();
            var store_code = $("#store_code").val();
            if(store_code ==''){
                alert('Please Select Store');
                return false;
            }
            $.ajax({
                type: "post",
                async: false,
                url: 'http://softest8.bdtask.com/saleserp_multistor/Cinvoice/insert_pos_invoice',
                data: {product_id: product_id,store_code:store_code},
                success: function (data) {
                    if (data == false) {
                        alert('This Product Not Found !');
                        document.getElementById('add_item').value = '';
                        document.getElementById('add_item').focus();
                        calculateSum();
                        invoice_paidamount();
                    } else {
                        $("#hidden_tr").css("display", "none");
                        document.getElementById('add_item').value = '';
                        document.getElementById('add_item').focus();
                        $('#normalinvoice tbody').append(data);
                        calculateSum();
                        invoice_paidamount();
                    }
                },
                error: function () {
                    alert('Request Failed, Please check your code and try again!');
                }
            });
        
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

</script>
@endsection