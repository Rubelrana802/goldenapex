@extends('admin.master')

@section('mainContent')

@section('title')
	Manage Invoice
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

        <!-- Alert Button -->
        <div class="row">
            <div class="col-sm-12">
                <div class="column">

                    <a href="{{ url('/invoice/create') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i> New Invoice </a>

                </div>
            </div>
        </div>

        <br>


      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> All Invoice </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                    	<th>Sl :</th>
                        <th>Customer Name</th>
                        <th>Date</th>
                        <th>Total Amount</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                	<?php $i=0; ?>

                	@foreach($invoice as $row)
                    <tr class="text-center">
                        <td>{{ ++$i }}</td>
                        <td> 
                            @foreach ($customer_info as $customer)
                            @if ($row->customer_id == $customer->id)
                                {{$customer->customer_name}}
                            @endif
                            @endforeach
                        </td>
                        <td>{{ $row->date }}</td>
                        <td>{{ $row->total_amount }}</td>
                        <td><a class="btn btn-info btn-sm" href="{{ url('/invoice/edit/'.$row->id) }}"><i style="font-size: 16px;" class="fa fa-edit" data-toggle="tooltip" title="Update"></i></a>   <a class="btn btn-danger btn-sm" href="{{ url('/category/delete/'.$row->id) }}"><i style="font-size: 16px;" class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></a></td>
                    </tr>
                    @endforeach
                    <tr class="text-center">
                        <td colspan="3" >
                             
                        </td>
                        <td>
                            {{$totalAmount}}
                        </td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->


@endsection





<!-- tootip text code -->
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>