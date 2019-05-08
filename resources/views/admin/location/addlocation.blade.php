@extends('admin.master')

@section('title')
	Add new Store
@endsection

@section('mainContent')

<br>
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="column">

                    <a href="{{ route('location.manage') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> Manage Store </a>

                </div>
            </div>
        </div>
        <br>
	<div class="card">
			     <div class="card-body">
				   <div class="card-title"> <i class="fa fa-plus"></i> Add new Store</div>
				   <hr>				  
			   <!-- Add Product -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                   
                    <div class="row">
			      		<div class="col-sm-2" role="alert">
                  		</div>
             		</div>
                    <form action="{{route('location.create')}}" method="POST">
                        @csrf
                            <div class="panel-body">
                                    <div class="row">
                                    
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <label for="name" class="col-sm-2 col-form-label">Store Name : </label>
                                                <div class="col-sm-6">
                                                    <input type="text"  class="form-control"name="name" placeholder="Store Name"   />
                                                </div>
                                            </div>
                                        </div>
            
                                    </div>
            
                                    <div class="row">
                                      
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <label for="mobile" class="col-sm-2 col-form-label">Mobile : </label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control"  name="mobile" placeholder="Mobile "  required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>                        
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <label for="address" class="col-sm-2 col-form-label">Address  : <i class="text-danger">*</i> </label>
                                                <div class="col-sm-6">
                                                    <textarea class="form-control " cols="30"  rows="5" name="address" type="text" ></textarea>
                                                </div>
                                            </div> 
                                        </div>
                                    </div>
                                       <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <label for="unit" class="col-sm-2 col-form-label">Status : </label>
                                                <div class="col-sm-6">
                                                    <select class="form-control" id="unit" name="status" >
                                                        <option value="">Select One</option>                                          
                                                        <option value="1">Active</option>
                                                        <option value="0">Deactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                       </div>
                                    </div>
                                  
                                    
            
                                    <br>
                                    <div class="form-group row">
                                          <label for="input-1" class="col-sm-4 col-form-label"></label>
                                          <div class="col-sm-4">
                                        <button type="submit" class="btn btn-primary shadow-primary px-5"></i> Add new Store</button>
                                      </div>
                                
                                
                                <br>
                    </form>
                            
                </div>
            </div>
        </div>

<!-- Add Product End -->
@endsection
