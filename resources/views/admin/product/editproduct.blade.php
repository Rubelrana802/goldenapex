@extends('admin.master')

@section('title')
	Update Product
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
				   <div class="card-title"> <i class="fa fa-edit"></i> Update Product Information</div>
				   <hr>				  
			   <!-- Add Product -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                   
                    <div class="row">
			      		<div class="col-sm-2" role="alert">
                  		</div>
             		</div>
                    <form action="{{route('product.update')}}" method="POST">
                        @csrf
                            <div class="panel-body">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label for="category_id" class="col-sm-4 col-form-label">Category : </label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="category_id" name="category_id" tabindex="3">
                                                        @foreach ($categories as $item)
                                                        <option value="{{$item->id}}" {{$product->category_id == $item->id ? 'selected' :''}}>{{$item->category_name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label for="product_name" class="col-sm-4 col-form-label">Product Name : </label>
                                                <div class="col-sm-8">
                                                    <input type="text"  class="form-control"name="product_name" value="{{$product->product_name}}"  />
																										<input type="hidden"  name="product_id" value="{{$product->id}}"  />
                                                
																									</div>
                                            </div>
                                        </div>
            
                                    </div>
            
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label for="product_code" class="col-sm-4 col-form-label">Product Code : </label>
                                                <div class="col-sm-8">
                                                    <input type="text"  class="form-control"  name="product_code" value="{{$product->product_code}}"  required />
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label for="purchase_price" class="col-sm-4 col-form-label">Purchase Price: </label>
                                                <div class="col-sm-8">
                                                    <input type="text" class="form-control"  name="purchase_price" value="{{$product->purchase_price}}" required />
                                                </div>
                                            </div>
                                        </div>
                                    </div>                        
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label for="sale_price" class="col-sm-4 col-form-label">Sale Price : <i class="text-danger">*</i> </label>
                                                <div class="col-sm-8">
                                                    <input class="form-control text-right"  name="sale_price" type="text" required="" value="{{$product->sale_price}}" tabindex="5" min="0">
                                                </div>
                                            </div> 
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group row">
                                                <label for="unit" class="col-sm-4 col-form-label">Status : </label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" id="unit" name="status" >
                                                                                             
                                                        <option value="1" {{$product->status == 1 ? 'selected' : ''}} >Active</option>
                                                        <option value="0" {{$product->status == 0 ? 'selected' : ''}}>Deactive</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  
                                    
            
                                    <br>
                                    <div class="form-group row">
                                          <label for="input-1" class="col-sm-4 col-form-label"></label>
                                          <div class="col-sm-4">
                                        <button type="submit" class="btn btn-primary shadow-primary px-5"></i> update product</button>
                                      </div>
                                
                                
                                <br>
                    </form>
                            
                </div>
            </div>
        </div>

<!-- Add Product End -->
@endsection
