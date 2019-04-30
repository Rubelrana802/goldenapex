@extends('admin.master')

@section('title')
	Add Supplier
@endsection

@section('mainContent')

<br>
    <section class="content">
        <!-- Alert Message -->  
        <div class="row">
            <div class="col-sm-12">
                <div class="column">

                    <a href="{{ url('/supplier/manage') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> Manage Supplier </a>
                </div>
            </div>
        </div>
        <br>
	<div class="card">
			     <div class="card-body">
				   <div class="card-title">Add Supplier</div>
				   <hr>				   
				    {!! Form::open(['url' => '/supplier/save','method'=>'post']) !!}
				    <div class="row">
			      		<div class="col-sm-2" role="alert">
                  		</div>
             		</div>
					<div class="form-group row">
                            <label for="supplier_id" class="col-sm-3 col-form-label">Supplier ID : <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="supplier_id" id="supplier_id" type="text" placeholder="Supplier ID"  required="" tabindex="1">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="supplier_name" class="col-sm-3 col-form-label">Supplier Name : <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="supplier_name" id="supplier_name" type="text" placeholder="Supplier Name"  required="" tabindex="2">
                            </div>
                        </div>
                       	<div class="form-group row">
                            <label for="mobile" class="col-sm-3 col-form-label">Supplier Mobile : <i class="text-danger"></i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="mobile" id="mobile" type="text" placeholder="Supplier Mobile"  min="0" tabindex="3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address " class="col-sm-3 col-form-label">Supplier Address :</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="address" id="address " rows="3" placeholder="Supplier Address" tabindex="4"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="details" class="col-sm-3 col-form-label">Supplier Details :</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="details" id="details" rows="3" placeholder="Supplier Details" tabindex="5"></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
					  <label for="input-4" class="col-sm-3 col-form-label">Status :</label>
					  <div class="col-sm-6">
						<select name="status" class="form-control">
							<option value="1">Active</option>
							<option value="0">Unactive</option>
						</select>
					  </div>
					</div>
                       <!--  <div class="form-group row">
                            <label for="previous_balance" class="col-sm-3 col-form-label">Previous Credit Balance</label>
                            <div class="col-sm-6">
                                <input class="form-control" name="previous_balance" id="previous_balance" type="number" placeholder="Previous Credit Balance" tabindex="6">
                            </div>
                        </div> -->

					<div class="form-group row">
					  <label for="input-1" class="col-sm-3 col-form-label"></label>
					  <div class="col-sm-6">
						<button type="submit" class="btn btn-primary shadow-primary px-5"></i> Save</button>
					  </div>
					</div>
					{!! Form::close() !!}
				 </div>
			   </div>

@endsection