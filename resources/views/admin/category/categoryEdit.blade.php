@extends('admin.master')

@section('title')
	Update Category
@endsection

@section('mainContent')

	<div class="card">
			     <div class="card-body">
				   <div class="card-title">Update Category</div>
				   <hr>				   
				    {!! Form::open(['url' => '/category/edit/','method'=>'POST','name'=>'editform']) !!}
				    <div class="row">
			      		<div class="col-sm-2" role="alert">
                  		</div>
             		</div>
					<div class="form-group row">
					  <label for="input-4" class="col-sm-2 col-form-label">Category Name :</label>
					  <div class="col-sm-6">
						<input type="text" class="form-control" id="input-4" name="categoryName" value="{{ $category->category_name }}">
					  </div>
					</div>

					<div class="form-group row">
					  <label for="input-4" class="col-sm-2 col-form-label">Status :</label>
					  <div class="col-sm-6">
						<select name="status" class="form-control">
							<option value="1">Active</option>
							<option value="0">Unactive</option>
						</select>
					  </div>
					</div>
					<input type="hidden" name="id" value="{{ $category->id }}">
					<div class="form-group row">
					  <label for="input-1" class="col-sm-2 col-form-label"></label>
					  <div class="col-sm-10">
						<button type="submit" class="btn btn-primary shadow-primary px-5"></i> Save</button>
					  </div>
					</div>

					
					{!! Form::close() !!}
				 </div>

				 <script type="text/javascript">
				 	document.forms['editform'].elements['status'].value='{{ $category->status }}'
				 </script>

			   </div>
@endsection