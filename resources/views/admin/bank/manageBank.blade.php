@extends('admin.master')

@section('title')
    Manage Bank
@endsection

@section('mainContent')
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
<div class="row">
            <div class="col-sm-12">
                <div class="column">
                    <a href="{{ url('/bank/add') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i> Add Bank </a>
                    <a href="{{ url('/bank/transaction') }}" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i>  Bank Transaction </a>

                </div>
            </div>
</div><br>

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
                        <th>Bank Name</th>
                        <th>A/C Name</th>
                        <th>A/C Number</th>
                        <th>Branch</th>
                        <th>Balance</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=0; ?>

                    @foreach($banks as $bank)
                    <tr class="text-center">
                        <td>{{ ++$i }}</td>
                        <td>{{ $bank->bank_name }}</td>
                        <td>{{ $bank->ac_name }}</td>
                        <td>{{ $bank->ac_number }}</td>
                        <td>{{ $bank->branch }}</td>
                        <td>&#2547;  {{ $bank->opening_balance }}</td>
                        <td><a class="btn btn-info btn-sm" href="{{ url('/bank/edit/'.$bank->id) }}"><i style="font-size: 16px;" class="fa fa-edit" data-toggle="tooltip" title="Update"></i></a>
                        </td>
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

