@extends('admin.master')

@section('mainContent')

@section('title')
	Manage Category
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

                    <a href="{{ url('/category/save') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i> Add Category </a>

                </div>
            </div>
        </div>

        <br>


      <div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> All Category </div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="default-datatable" class="table table-bordered">
                <thead>
                    <tr class="text-center">
                    	<th>Category ID</th>
                        <th>Category Name</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                	<?php $i=0; ?>

                	@foreach($category as $row)
                    <tr class="text-center">
                        <td>{{ ++$i }}</td>
                        <td>{{ $row->category_name }}</td>
                        <td>{{ ($row->status) == 1? 'Active' : 'Unactive' }}</td>
                        <td><a class="btn btn-info btn-sm" href="{{ url('/category/edit/'.$row->id) }}"><i style="font-size: 16px;" class="fa fa-edit" data-toggle="tooltip" title="Update"></i></a>   <a class="btn btn-danger btn-sm" href="{{ url('/category/delete/'.$row->id) }}"><i style="font-size: 16px;" class="fa fa-trash" data-toggle="tooltip" title="Delete"></i></a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
            </div>
            </div>
          </div>
        </div>
      </div><!-- End Row-->


@endsection



<!-- Delete Category ajax code -->
<script type="text/javascript">
    //Delete Category 
    $(".DeleteCategory").click(function ()
    {
        var category_id = $(this).attr('name');
        var csrf_test_name = $("[name=csrf_test_name]").val();
        var x = confirm("Are You Sure,Want to Delete ?");
        if (x == true) {
            $.ajax
                    ({
                        type: "POST",
                        url: 'http://localhost/SalesERP/Ccategory/category_delete',
                        data: {category_id: category_id, csrf_test_name: csrf_test_name},
                        cache: false,
                        success: function (datas)
                        {
                            alert(datas);
                        }
                    });
        }
    });
</script>

<!-- tootip text code -->
<script>
$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip();   
});
</script>