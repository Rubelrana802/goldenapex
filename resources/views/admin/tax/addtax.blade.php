@extends('admin.master')

@section('title')
	Add Tax
@endsection

@section('mainContent')

<br>


    <section class="content">

        <!-- Alert Message -->
        
        <div class="row">
            <div class="col-sm-12">
                <div class="column">

                    <a href="{{ url('/tax/manage') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> Manage Tax </a>

                </div>
            </div>
        </div>

        <br>


	<div class="card">
			     <div class="card-body">
				   <div class="card-title">Add Tax</div>
				   <hr>				   
				    {!! Form::open(['url' => '/tax/save','method'=>'post']) !!}
				    <div class="row">
			      		<div class="col-sm-2" role="alert">
                  		</div>
             		</div>
					<div class="form-group row">
					  <label for="input-4" class="col-sm-2 col-form-label">Tax Name :</label>
					  <div class="col-sm-6">
						<input type="number" class="form-control" id="input-4" name="taxName" placeholder="Enter tax %">
					  </div>
					</div>

<!-- 					<div class="form-group row">
					  <label for="input-4" class="col-sm-2 col-form-label">Status :</label>
					  <div class="col-sm-6">
						<select name="status" class="form-control">
							<option value="1">Active</option>
							<option value="0">Unactive</option>
						</select>
					  </div>
					</div> -->

					<div class="form-group row">
					  <label for="input-1" class="col-sm-2 col-form-label"></label>
					  <div class="col-sm-10">
						<button type="submit" class="btn btn-primary shadow-primary px-5"></i> Save</button>
					  </div>
					</div>

					
					{!! Form::close() !!}
				 </div>
			   </div>
@endsection