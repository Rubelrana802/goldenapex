@extends('admin.master')

@section('title')
	Add Customer Information
@endsection

@section('mainContent')
<script src="http://saleserpnew.bdtask.com/my-assets/js/admin_js/json/customer.js.php" ></script>
      <!-- Breadcrumb-->
     <div class="row pt-2 pb-2" style="background: #FFFFFF; margin-top: -8px;">
        <div class="col-sm-9">
            <h3 class="page-title">Bank List</h3>
            <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="javaScript:void();">Home</a></li>
            <li class="breadcrumb-item"><a href="javaScript:void();">Bank</a></li>
            <li class="breadcrumb-item active" aria-current="page">Bank List</li>
         </ol>
       </div>
       <div class="col-sm-3">
       <div class="btn-group float-sm-right pt-3">
        <button type="button" class="btn btn-outline-primary waves-effect waves-light"><i class="fa fa-cog mr-1"></i> Setting</button>
        <button type="button" class="btn btn-outline-primary dropdown-toggle dropdown-toggle-split waves-effect waves-light" data-toggle="dropdown">
        <span class="caret"></span>
        </button>
      </div>
     </div>
     </div><br>
    <!-- End Breadcrumb-->

	<section class="content">
		<!-- Alert Message -->
	    
	    <div class="row">
            <div class="col-sm-12">
                <div class="column">
                
                  <a href="{{ url('/customer/add') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i> Add Customer </a>

                  <a href="{{ url('/customer/manage') }}" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>  Manage Customer </a>

                  <a href="{{ url('/customer/paid') }}" class="btn btn-warning m-b-5 m-r-2"><i class="ti-align-justify"> </i>  Paid Customer </a>

                </div>
            </div>
        </div>
<br>
<div class="row">
        <div class="col-lg-12">
          <div class="card">
            <div class="card-header"><i class="fa fa-table"></i> Manage Bank</div>
            <div class="card-body">
              <div class="table-responsive">
              <table id="example" class="table table-bordered">
                <thead>
									<tr>
										<th>SL.</th>
										<th>Customer Name</th>
										<th>Address</th>
										<th>Mobile</th>
										<th style="text-align:right !Important">Balance</th>
										<th style="text-align:center !Important">Action</th>
									</tr>
								</thead>
								<tbody>
																</tbody>
								<tfoot>
									<tr>
										<td style="text-align:right !Important" colspan="4"><b> Grand Total</b></td>
										<td style="text-align:right !Important">
											<b>$ 0.00</b>
										</td>
										<td></td>
									</tr>
								</tfoot>
		                    </table>
		                    <div class="text-right"></div>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
	</section>

<!-- Manage Customer End -->
@endsection

