@extends('admin.master')

@section('title')
	Add Customer Information
@endsection

@section('mainContent')

<br>
    <section class="content">
        <!-- Alert Message -->  
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                	<a href="#" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> Manage Customer </a>

                    <a href="#" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>  Credit Customer </a>

                    <a href="#" class="btn btn-warning m-b-5 m-r-2"><i class="ti-align-justify"> </i>  Paid Customer </a>
                </div>
            </div>
        </div>
        <br>
	<div class="card">
			     <div class="card-body">
				   <div class="card-title">Add Customer Information</div>
				   <hr>				   
				    {!! Form::open(['url' => '/customer/save','method'=>'POST']) !!}
<div class="form-group row">
                            <label for="customer_name" class="col-sm-3 col-form-label">Customer Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="customer_name" id="customer_name" type="text" placeholder="Customer Name"  required="" tabindex="1">
                            </div>
                        </div>

                       	<div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Customer Email</label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="email" id="email" type="email" placeholder="Customer Email" tabindex="2"> 
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mobile" class="col-sm-3 col-form-label">Customer Mobile</label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="mobile" id="mobile" type="text" placeholder="Customer Mobile" min="0" tabindex="3">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address " class="col-sm-3 col-form-label">Customer Address</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="address" id="address " rows="3" placeholder="Customer Address" tabindex="4"></textarea>
                            </div>
                        </div>
                    <!--  <div class="form-group row">
					  <label for="input-4" class="col-sm-3 col-form-label">Status :</label>
					  	<div class="col-sm-6">
						<select name="status" class="form-control">
							<option value="1">Active</option>
							<option value="0">Unactive</option>
						</select>
					  </div>
					</div>-->
                        <div class="form-group row">
                            <label for="previous_balance" class="col-sm-3 col-form-label">Previous Credit Balance</label>
                            <div class="col-sm-6">
                                <input class="form-control" name="previous_balance" id="previous_balance" type="text" placeholder="Previous Credit Balance" tabindex="5">
                            </div>
                        </div> 
					<div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="reset" class="btn btn-danger" value="Reset" tabindex="6"/>
                                <input type="submit" id="add-deposit" class="btn btn-info" name="add-deposit" value="Save" tabindex="7"/>
                            </div>
                        </div>
					{!! Form::close() !!}
				 </div>
			   </div>

@endsection