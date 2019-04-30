@extends('admin.master')

@section('title')
	Bank Transaction
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
             		</div><div class="form-group row">
                            <label for="date" class="col-sm-3 col-form-label">Date <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                            <input type="text" class="form-control datepicker" name="date" id="date" required="" placeholder="Date" value="2019-03-24" tabindex="1"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="account_type" class="col-sm-3 col-form-label">Account Type <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" id="account_type" name="account_type" tabindex="2">
                                    <option value="Debit(+)">Debit (+)</option>
                                    <option value="Credit(-)">Credit (-)</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="bank_name" class="col-sm-3 col-form-label">Bank Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="bank_id" tabindex="3">
                                @foreach($banks as $bank)
                                    <option value="{{ $bank->id }}">{{ $bank->bank_name }}</option>
                                @endforeach   
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="withdraw_deposite_id" class="col-sm-3 col-form-label">Withdraw / Deposite ID <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="text" class="form-control" name="withdraw_deposite_id" id="withdraw_deposite_id" required="" placeholder="Withdraw / Deposite ID" tabindex="5"/>
                            </div>
                        </div>        

                        <div class="form-group row">
                            <label for="ammount" class="col-sm-3 col-form-label">Amount <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control" name="ammount" id="ammount" required="" placeholder="Amount" tabindex="5"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="description" class="col-sm-3 col-form-label">Description </label>
                            <div class="col-sm-6">
                                <textarea class="form-control" placeholder="Description" name="description" tabindex="4"></textarea>
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