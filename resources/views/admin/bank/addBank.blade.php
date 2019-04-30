@extends('admin.master')

@section('title')
	Add Bank
@endsection

@section('mainContent')

<br>


    <section class="content">

        <!-- Alert Message -->
        
        <div class="row">
            <div class="col-sm-12">
                <div class="column">

                    <a href="{{ url('/bank/manage') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> Manage Bank </a>

                </div>
            </div>
        </div>

        <br>


	<div class="card">
			     <div class="card-body">
				   <div class="card-title">Add Bank</div>
				   <hr>				   
				    {!! Form::open(['url' => '/bank/save','method'=>'post']) !!}
				    <div class="row">
			      		<div class="col-sm-2" role="alert">
                  		</div>
             		</div>
					<div class="form-group row">
                            <label for="bank_name" class="col-sm-3 col-form-label">Bank Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="bank_name" id="bank_name" required="" placeholder="Bank Name" tabindex="1"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ac_name" class="col-sm-3 col-form-label">A/C Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="ac_name" id="ac_name" required="" placeholder="A/C Name" tabindex="2"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ac_no" class="col-sm-3 col-form-label">A/C Number <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="ac_no" id="ac_no" required="" placeholder="A/C Number" tabindex="3"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="branch" class="col-sm-3 col-form-label">Branch <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="branch" id="branch" required="" placeholder="Branch" tabindex="4"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="address" id="address" placeholder="Address" tabindex="5"></textarea>
                              
                            </div>
                        </div>

               <div class="form-group row">
                            <label for="opening_balance" class="col-sm-3 col-form-label">Opening Balance</label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="opening_balance" id="opening_balance" placeholder="Opening Balance" tabindex="5"/>
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