@extends('admin.master')

@section('title')
	Update Supplier Information
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
				   <div class="card-title"> <i class="fa fa-edit"></i> Update Supplier</div>
				   <hr>				   
				    {!! Form::open(['url' => '/supplier/update','method'=>'post']) !!}
				    <div class="row">
			      		<div class="col-sm-2" role="alert">
                  		</div>
             		</div>
					<div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Supplier Name : <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="name" id="name" type="text" value="{{$supplier_info->name}}"  required="" tabindex="1">
                                <input  name ="id"  type="hidden" value="{{$supplier_info->id}}" >
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="email" class="col-sm-3 col-form-label">Supplier Email : </label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="email" id="email" type="email" value="{{$supplier_info->email}}"  required="" tabindex="2">
                            </div>
                        </div>
                       	<div class="form-group row">
                            <label for="mobile" class="col-sm-3 col-form-label">Supplier Mobile : <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="mobile" id="mobile" type="text" value="{{$supplier_info->mobile}}"  min="0" tabindex="3">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="address " class="col-sm-3 col-form-label">Supplier Address : <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="address" id="address " rows="3"  tabindex="4">{{$supplier_info->address}}</textarea>
                            </div>
                        </div>
                        
                       <div class="form-group row">
                            <label for="previous_due" class="col-sm-3 col-form-label">Previous Due : </label>
                            <div class="col-sm-6">
                                <input class="form-control" name="previous_due" id="previous_due" type="number" value="{{$supplier_info->previous_due}}" tabindex="6">
                            </div>
                        </div> 

					<div class="form-group row">
					  <label for="input-1" class="col-sm-3 col-form-label"></label>
					  <div class="col-sm-6">
						<button type="submit" class="btn btn-primary shadow-primary px-5"></i> Update</button>
					  </div>
					</div>
					{!! Form::close() !!}
				 </div>
			   </div>

@endsection