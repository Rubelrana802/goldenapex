@extends('admin.master')

@section('title')
	Add new product
@endsection

@section('mainContent')

<br>
    <section class="content">
        <div class="row">
            <div class="col-sm-12">
                <div class="column">

                    <a href="{{ url('/product/manage') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> Manage Product </a>

                </div>
            </div>
        </div>
        <br>
	<div class="card">
			     <div class="card-body">
				   <div class="card-title"> <i class="fa fa-plus"></i> Add new product</div>
				   <hr>				  
			   <!-- Add Product -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                   
                    <div class="row">
			      		<div class="col-sm-2" role="alert">
                  		</div>
             		</div>
                    <form action="{{route('product.save')}}" method="POST">
                        @csrf
                            <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label for="category_id" class="col-sm-4 col-form-label">Category : </label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="category_id" name="category_id" tabindex="3">
                                                        @foreach ($categories as $item)
                                                        <option value="{{$item->id}}">{{$item->category_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label for="product_name" class="col-sm-4 col-form-label">Product Name : </label>
                                                <div class="col-sm-8">
                                                    <input type="text"  class="form-control"name="product_name" placeholder="Product Name"   />
                                                </div>
                                            </div>
                                        </div>
            
                                    </div>
            
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label for="product_code" class="col-sm-4 col-form-label">Product Code : </label>
                                                <div class="col-sm-8">
                                                    <input type="text"  class="form-control"  name="product_code" placeholder="Product Code "  required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label for="purchase_price" class="col-sm-4 col-form-label">Purchase Price: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control"  name="purchase_price" placeholder="Purchase Price"  required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>                        
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label for="sale_price" class="col-sm-4 col-form-label">Sale Price : <i class="text-danger">*</i> </label>
                                                <div class="col-sm-8">
                                                    <input class="form-control text-right"  name="sale_price" type="text" required="" placeholder="0.00" tabindex="5" min="0">
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label for="unit" class="col-sm-4 col-form-label">Status : </label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="unit" name="status" >
                                                        <option value="">Select One</option>                                          
                                                        <option value="1">Active</option>
                                                        <option value="0">Deactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    
            
                                    <br>
                                    <div class="form-group row">
                                          <label for="input-1" class="col-sm-4 col-form-label"></label>
                                          <div class="col-sm-4">
                                        <button type="submit" class="btn btn-primary shadow-primary px-5"></i> Add new product</button>
                                      </div>
                                
                                
                                <br>
                    </form>
                            
                </div>
            </div>
        </div>

<!-- Add Product End -->
@endsection
