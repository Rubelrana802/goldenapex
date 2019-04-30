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
				   <div class="card-title">Add new product</div>
				   <hr>				  
			   <!-- Add Product -->
        <div class="row">
            <div class="col-sm-12">
                <div class="panel panel-bd lobidrag">
                    {!! Form::open(['url' => '/product/save','method'=>'post']) !!}
                    <div class="row">
			      		<div class="col-sm-2" role="alert">
                  		</div>
             		</div>
                    <div class="panel-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="product_name" class="col-sm-4 col-form-label">Product Name : <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input class="form-control" name="product_name" type="text" id="product_name" placeholder="Product Name" required tabindex="1" >
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="serial_no" class="col-sm-4 col-form-label">Serial Number : </label>
                                    <div class="col-sm-8">
                                        <input type="text" tabindex="" class="form-control" id="serial_no" name="serial_no" placeholder="Serial Number"   />
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="product_model" class="col-sm-4 col-form-label">Model : <i class="text-danger">*</i></label>
                                    <div class="col-sm-8">
                                        <input type="text" tabindex="" class="form-control" id="product_model" name="model" placeholder="Model"  required />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="category_id" class="col-sm-4 col-form-label">Category : </label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="category_id" name="category_id" tabindex="3">
                                        <option></option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="sell_price" class="col-sm-4 col-form-label">Sale Price : <i class="text-danger">*</i> </label>
                                    <div class="col-sm-8">
                                        <input class="form-control text-right" id="sell_price" name="price" type="text" required="" placeholder="0.00" tabindex="5" min="0">
                                    </div>
                                </div> 
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="unit" class="col-sm-4 col-form-label">Unit : </label>
                                    <div class="col-sm-8">
                                        <select class="form-control" id="unit" name="unit" tabindex="-1" aria-hidden="true">
                                            <option value="">Select One</option>                                          
                                                <option value="Piece">Piece</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="image" class="col-sm-4 col-form-label">Image :</label>
                                    <div class="col-sm-8">
                                        <input type="file" name="image" class="form-control" id="" tabindex="4">
                                    </div>
                                </div> 
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label for="tax" class="col-sm-4 col-form-label">Tax : </label>
                                    <div class="col-sm-8">
                                        <select name="tax" id="tax" class="form-control dont-select-me" required="" tabindex="8">
                                            <option value=" ">Select One</option>
                                            <option value="2">2%</option>                                
                                        </select>
                                    </div>
                                </div> 
                            </div>
                        </div> 

                        <div class="table-responsive" style="margin-top: 10px">
                            <table class="table table-bordered table-hover"  id="product_table">
                                <thead>
                                    <tr>
                                        <th class="text-center">Supplier <i class="text-danger">*</i></th>
                                        <th class="text-center">Supplier Price <i class="text-danger">*</i></th>


                                        <th class="text-center">Action <i class="text-danger"></i></th>
                                    </tr>
                                </thead>
                                <tbody id="proudt_item">
                                    <tr class="">

                                        <td>
                                            <select name="supplier_id[]" class="form-control dont-select-me" required="" tabindex="8">
                                                <option value=""> select Supplier</option>                                                
                                              	<option value=""></option>                                                   
                                            </select>
                                        </td>
                                        <td class="">
                                            <input type="text" tabindex="6" class="form-control text-right" name="supplier_price" placeholder="0.00"  required  min="0"/>
                                        </td>

                                        <td> <button type="button" id="add_purchase_item" class="btn btn-info" name="add-invoice-item" onClick="addpruduct('proudt_item');"  tabindex="9"/><i class="fa fa-plus-square" aria-hidden="true"></i></button> <button class="btn btn-danger red" type="button" value="Delete" onclick="deleteRow(this)" tabindex="10"><i class="fa fa-trash" aria-hidden="true"></i></button>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-sm-12">
                                <center><label for="description" class="col-form-label">Product Details</label></center>
                                <textarea class="form-control" name="description" id="description" rows="3" placeholder="Product Details" tabindex="2"></textarea>
                            </div>
                        </div>

                        <br>
                        <div class="form-group row">
					  		<label for="input-1" class="col-sm-4 col-form-label"></label>
					  		<div class="col-sm-4">
							<button type="submit" class="btn btn-primary shadow-primary px-5"></i> Add new product</button>
					  	</div>
					
                    
                    <br>
                    {!! Form::close() !!}               
                </div>
            </div>
        </div>

<!-- Add Product End -->
@endsection
