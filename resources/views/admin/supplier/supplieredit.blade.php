@extends('admin.master')

@section('title')
	Update Category
@endsection

@section('mainContent')

	<div class="card">
			     <div class="card-body">
				   <div class="card-title">Supplier Information Category</div>
				   <hr>				   
				    {!! Form::open(['url' => '/supplier/update/','method'=>'POST','name'=>'editform']) !!}

				    <div class="form-group row">
                            <label for="supplier_id" class="col-sm-3 col-form-label">Supplier ID : <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="supplier_id" id="supplier_id" type="text" placeholder="Supplier ID"  required="" tabindex="1" value="{{ $supplier_info->supplier_id }}">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="supplier_name" class="col-sm-3 col-form-label">Supplier Name : <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name ="supplier_name" id="supplier_name" type="text" placeholder="Supplier Name"  required="" tabindex="2" value="{{ $supplier_info->supplier_name }}">
                            </div>
                        </div>

                       	<div class="form-group row">
                            <label for="mobile" class="col-sm-3 col-form-label">Supplier Mobile : <i class="text-danger"></i></label>
                            <div class="col-sm-6">
                                <input class="form-control" name="mobile" id="mobile" type="text" placeholder="Supplier Mobile"  min="0" tabindex="3" value="{{ $supplier_info->mobile}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="address " class="col-sm-3 col-form-label">Supplier Address :</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="address" id="address " rows="3" placeholder="Supplier Address" tabindex="4" value="{{ $supplier_info->address }}"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="details" class="col-sm-3 col-form-label">Supplier Details :</label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="details" id="details" rows="3" placeholder="Supplier Details" tabindex="5" value="{{ $supplier_info->details }}"></textarea>
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

					<input type="hidden" name="id" value="{{ $supplier_info->id }}">
					<div class="form-group row">
					  <label for="input-1" class="col-sm-2 col-form-label"></label>
					  <div class="col-sm-10">
						<button type="submit" class="btn btn-primary shadow-primary px-5"></i> Save</button>
					  </div>
					</div>

					
					{!! Form::close() !!}
				 </div>

				 <script type="text/javascript">
				 	document.forms['editform'].elements['status'].value='{{ $supplier_info->status }}'
				 </script>

			   </div>
@endsection