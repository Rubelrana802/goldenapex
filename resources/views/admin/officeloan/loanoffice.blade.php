@extends('admin.master')

@section('title')
	Add Loan
@endsection

@section('mainContent')
    <section class="content">
        <!-- Alert Message -->  
        <div class="row mb-2 mt-2">
            <div class="col-sm-12">
                <div class="column">
                	<a href="#" class="btn btn-info m-b-5 m-r-2"><i class="ti-align-justify"> </i> Add Loan </a>
                	<a href="#" class="btn btn-primary m-b-5 m-r-2"><i class="ti-align-justify"> </i> Payment Loan </a>
                	<a href="#" class="btn btn-warning m-b-5 m-r-2"><i class="ti-align-justify"> </i> Manage Loan </a>
                </div>
            </div>
        </div>
	<div class="card">
			     <div class="card-body">
				   <div class="card-title">Add Loan</div>
				   <hr>				   
				    {!! Form::open(['url' => '/customer/save','method'=>'POST']) !!}
                    	<div class="form-group row">
                            <label for="name" class="col-sm-3 col-form-label">Name <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <select class="form-control" name="person_id" id="name" tabindex="1">
                                    <option>Select One</option>
                                    
                                    <option value="G88QAH1ZJ8">mahabub</option>
                                    
                                    <option value="OIC64IWETF">shipon</option>
                                                                        
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-sm-3 col-form-label">Phone <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                                <input type="number" class="form-control phone" name="phone" id="phone" required="" placeholder="Phone" min="0" tabindex="2"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="ammount" class="col-sm-3 col-form-label">Amount <i class="text-danger">*</i></label>
                            <div class="col-sm-6">
                               <input type="number" class="form-control" name="ammount" id="ammount" required="" placeholder="Amount" min="0" tabindex="3"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="date" class="col-sm-3 col-form-label">Date <i class="text-danger"></i></label>
                            <div class="col-sm-6">
                               <input type="text" class="form-control datepicker" name="date" id="date" value="2019-04-09" placeholder="Date" tabindex="4"/>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="details" class="col-sm-3 col-form-label">Details <i class="text-danger"></i></label>
                            <div class="col-sm-6">
                                <textarea class="form-control" name="details" id="details" placeholder="Details" tabindex="5"></textarea>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="example-text-input" class="col-sm-4 col-form-label"></label>
                            <div class="col-sm-6">
                                <input type="reset" class="btn btn-danger" value="Reset" tabindex="6"/>
                                <input type="submit" id="add-deposit" class="btn btn-primary" name="add-deposit" value="Save" tabindex="7"/>
                            </div>
                        </div>
                    </div>
					{!! Form::close() !!}
				 </div>
			   </div>

<script type="text/javascript">
    //Phone select by ajax start
    $('body').on('change','#name',function(event){
        event.preventDefault(); 
        var person_id=$('#name').val();
        var csrf_test_name=  $("[name=csrf_test_name]").val();
        $.ajax({
            url: '#',
            type: 'get',
            data: {person_id:person_id,csrf_test_name:csrf_test_name}, 
            success: function (msg){
                $(".phone").val(msg);
            },
            error: function (xhr, desc, err){
                 alert('failed');
            }
        });        
    });
    //Phone select by ajax end
</script>

@endsection