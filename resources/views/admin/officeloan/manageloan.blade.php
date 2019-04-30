@extends('admin.master')

@section('title')
	Add Payment
@endsection

@section('mainContent')

    <section class="content">

        <!-- Alert Message -->
        
        <div class="row">
            <div class="col-sm-12">
                <div class="column">
                              <a href="{{ url('/officeloan/add') }}" class="btn btn-info m-b-5 m-r-2"><i class="ti-plus"> </i> Add Person </a>
                                </div>
            </div>
        </div>

        <!-- Account List -->
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-heading">
                        <div class="card-title">
                            <h4>Manage Person </h4>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="dataTableExample2" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Address</th>
                                        <th>Phone</th>
                                        <th class="text-right">Balance</th>
                                        <th>Action                                        <form action="#" class="form-inline" method="post" accept-charset="utf-8">
                                             <input type="hidden" name="all" value="all">
                                              <button type="submit" class="btn btn-success">All</button>
                                             </form>                                        </th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                                <tr>
                                                <td>
                                                    <a href="http://softest8.bdtask.com/saleserp_multistor/Csettings/person_ledger/G88QAH1ZJ8">
                                                        mahabub                                                    </a>
                                                </td>
                                                <td>
                                                    bazar                                                </td>
                                                <td>
                                                    011111111111                                                </td>
                                                <td class="text-right">
                                                    ৳  0.00                                                </td>
                                                <td>                                                                                                     <a href="http://softest8.bdtask.com/saleserp_multistor/Csettings/person_edit/EIWA3A4HT1"class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                                                                </td>
                                            </tr>
                                                                                    <tr>
                                                <td>
                                                    <a href="http://softest8.bdtask.com/saleserp_multistor/Csettings/person_ledger/ZJS3L68BVR">
                                                        Jen Austin                                                    </a>
                                                </td>
                                                <td>
                                                    dfdsfsd                                                </td>
                                                <td>
                                                    0012412                                                </td>
                                                <td class="text-right">
                                                    ৳  29,000.00                                                </td>
                                                <td>                                                                                                    <a href="http://softest8.bdtask.com/saleserp_multistor/Csettings/person_edit/ZJS3L68BVR"class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                                                                                </td>
                                            </tr>
                                                                                    <tr>
                                                <td>
                                                    <a href="http://softest8.bdtask.com/saleserp_multistor/Csettings/person_ledger/GK98GGYWZM">
                                                        sdfsd                                                    </a>
                                                </td>
                                                <td>
                                                    wsds                                                </td>
                                                <td>
                                                    088                                                </td>
                                                <td class="text-right">
                                                    ৳  0.00                                                </td>
                                                <td>                                                                                                    <a href="http://softest8.bdtask.com/saleserp_multistor/Csettings/person_edit/GK98GGYWZM"class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>                                                                                                </td>
                                            </tr>
                                                                                    <tr>
                                                <td>
                                                    <a href="http://softest8.bdtask.com/saleserp_multistor/Csettings/person_ledger/DI25ALII32">
                                                        Labib                                                    </a>
                                                </td>
                                                <td>
                                                    0fddf                                                </td>
                                                <td>
                                                    0999                                                </td>
                                                <td class="text-right">
                                                    ৳  0.00                                                </td>
                                                <td>                                                                                                   <a href="http://softest8.bdtask.com/saleserp_multistor/Csettings/person_edit/DI25ALII32"class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="" data-original-title="Update">
                                                        <i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>                                                                                                </td>
                                            </tr>
                                                                                    <tr>
                                                <td>
                                                    <a href="http://softest8.bdtask.com/saleserp_multistor/Csettings/person_ledger/HV8HETKLYV">
                                                        Habib                                                    </a>
                                                </td>
                                                <td>
                                                    bazbzq                                                </td>
                                                <td>
                                                    02222                                                </td>
                                                <td class="text-right">
                                                    ৳  0.00                                                </td>
                                                <td>                                                                                                    <a href="http://softest8.bdtask.com/saleserp_multistor/Csettings/person_edit/HV8HETKLYV"class="btn btn-info btn-sm" data-toggle="tooltip" data-placement="left" title="" data-i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>
                                           </tr>
                                                                                    <tr>
                                                <td>
                                                    <a href="http://softest8.bdtask.com/saleserp_multistor/Csettings/person_ledger/5951YT2MK1">
                                                        oooo                                                    </a>
                                                </td>
                                                <td>
                                                    mmbb                                                </td>
                                                <td>
                                                    0222                                                </td>
                                                <td class="text-right">
                                                    ৳  0.00                                                </td>
                                                <td>                                          <a href="http://softest8.bdtask.com/saleserp_multistor/Csettings/person_e<i class="fa fa-pencil" aria-hidden="true"></i>
                                                    </a>                                                                                                </td>
                                            </tr>
 
                                                                        </tbody>
                               <tfooter><tr><td class="text-center" colspan="3"><b>Total</b></td><td class="text-right">৳  37,000.00</td><td></td></tr></tfooter>
                            </table>
                        </div>
                        <div class="text-right"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
