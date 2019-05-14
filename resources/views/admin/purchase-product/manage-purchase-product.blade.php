@extends('admin.master')

@section('mainContent')

@section('title')
	Manage Purchase Product
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
                    <a href="{{ route('purchase.product') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i> Purchase  Product </a>
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
                    	<th>Challan No</th>
                        <th>Suplier Name</th>
                        <th>Purchase Date</th>
                        <th>Total Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                       
                        @forelse ($product_purchase as $product)
                    <tr>
                       
                             <td>{{$product->challan_no}}</td>
                             <td>
                               @foreach ($suppliers as $supplier)
                               {{$product->supplier_id == $supplier->id ? $supplier->name : '' }}
                               @endforeach
                               
                              </td>
                             <td>{{$product->purchase_date}}</td>
                             <td>{{$product->grand_total_amount}}</td>
                             
                             <td>
                                 <a class="btn btn-info btn-sm" href="{{ route('edit.purchase.product',$product->id) }}"><i style="font-size: 16px;" class="fa fa-edit" data-toggle="tooltip" title="Update"></i></a>  
                                 <a class="btn btn-danger btn-sm "    href="{{ route('delete.purchase.product',$product->id) }}" ><i style="font-size: 16px;" class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></a>
                            </td>
                           
                    </tr>
                   
                    @empty
                            
                    @endforelse
                    <tr>
                        <td colspan="3" class="text-right"><b> Total Purchase Price : </b></td>
                        <td>
                          
                          {{$totalPurchasePrice}}
                      
                        </td>
                        <td></td>
                      </tr>
                </tbody>
                
            </table>
            {{$product_purchase->links()}}
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

