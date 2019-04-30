@extends('admin.master')

@section('title')
	Add Office Loan
@endsection

@section('mainContent')

<br>
    <section class="content">
        <!-- Alert Message -->  
        <div class="row mb-2">
            <div class="col-sm-12">
                <div class="column">
                	<a href="#" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> Manage Loan </a>
                </div>
            </div>
        </div>
	<div class="card">
			     <div class="card-body">
				   <div class="card-title">Add Office Loan</div>
				   <hr>				   
				    {!! Form::open(['url' => '/customer/save','method'=>'POST']) !!}
<div class="form-group row">
                            <label for="customer_name" class="col-sm-3 col-form-label">Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="customer_name" id="customer_name" type="text" placeholder="Customer Name"  required="" tabindex="1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="mobile" class="col-sm-3 col-form-label"> Mobile <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="mobile" id="mobile" type="text" placeholder="Customer Mobile" min="0" tabindex="3">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address " class="col-sm-3 col-form-label"> Address</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="address" id="address " rows="3" placeholder="Customer Address" tabindex="4"></textarea>
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