@extends('admin.master')

@section('title')
	Update Store
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
				   <div class="card-title"> <i class="fa fa-edit"></i> Update Store</div>
				   <hr>				  
			   <!-- Add Product -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                   
                    <div class="row">
			      		<div class="col-sm-2" role="alert">
                  		</div>
             		</div>
                    <form action="{{route('location.update')}}" method="POST">
                        @csrf
                            <div class="panel-body">
                                    <div class="row">
                                    
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <label for="name" class="col-sm-2 col-form-label">Store Name : </label>
                                                <div class="col-sm-6">
                                                    <input type="text"  class="form-control"name="name" value="{{$location->name}}" />
                                                    <input type="hidden"  name="id" value="{{$location->id}}" />
                                                </div>
                                            </div>
                                        </div>
            
                                    </div>
            
                                    <div class="row">
                                      
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <label for="mobile" class="col-sm-2 col-form-label">Mobile : </label>
                                                <div class="col-sm-6">
                                                    <input type="text" class="form-control"  name="mobile" value="{{$location->mobile}}"  required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>                        
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <div class="form-group row">
                                                <label for="address" class="col-sm-2 col-form-label">Address  : <i class="text-danger">*</i> </label>
                                                <div class="col-sm-6">
                                                    <textarea class="form-control " cols="30"  rows="5" name="address" type="text" >{{$location->name}}</textarea>
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
                                                                                     
                                                        <option value="1" {{$location->status == 1 ? 'selected' : ' '}}>Active</option>
                                                        <option value="0" {{$location->status == 0 ? 'selected' : ' '}}>Deactive</option>
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
                                        <button type="submit" class="btn btn-primary shadow-primary px-5"></i> Update Store</button>
                                      </div>
                                
                                
                                <br>
                    </form>
                            
                </div>
            </div>
        </div>

<!-- Add Product End -->
@endsection
