@extends('admin.master')

@section('mainContent')

@section('title')
	Manage Product
@endsection

<br>
    <section class="content">

        <!-- Alert Message -->
        <div class="row">
          <div class="col-sm-12">
          @if(Session::has('message'))
              <div class="alert alert-info alert-dismissible" role="alert">
                  <button type="button" class="close" data-dismiss="alert">&times;</button>
                  <div class="text-center" style="font-size: 18px; padding: 9px; border: 2px solid #00B1E6;">
                   {{ Session::get('message') }}
                  </div>
              </div>
          @endif
          </div>
      </div>
      <!-- end Message -->
        
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="{{ route('add.product') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i> Add Product </a>
                </div>
            </div>
        </div>
    <br>
      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> All Products Information </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                    	<th>Product Name</th>
                        <th>Product Code</th>
                        <th>Purchase Price</th>
                        <th>Sale Price</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                        @forelse ($products as $product)
                    <tr>
                       
                             <td>{{$product->product_name}}</td>
                             <td>{{$product->product_code}}</td>
                             <td>{{$product->purchase_price}}</td>
                             <td>{{$product->sale_price}}</td>
                             <td>{{$product->status == 1 ? 'Active' : 'Deactive'}}</td>
                             <td>
                                 <a class="btn btn-info btn-sm" href="{{ url('/product/edit/'.$product->id) }}"><i style="font-size: 16px;" class="fa fa-edit" data-toggle="tooltip" title="Update"></i></a>  
                                 <a class="btn btn-danger btn-sm "    href="{{ url('/product/delete/'.$product->id) }}" ><i style="font-size: 16px;" class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></a>
                            </td>
           
                    </tr>
                    @empty
                            
                    @endforelse
                </tbody>
                <tbody>
                	

                </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->

@endsection


<!-- Delete Category ajax code -->
@push('script')

  <!-- tootip text code -->
<script>
        $(document).ready(function(){
          $('[data-toggle="tooltip"]').tooltip();   
        });
  </script>
@endpush

