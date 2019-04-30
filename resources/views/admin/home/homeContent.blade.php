@extends('admin.master')

@section('title')
  Dashboard
@endsection

@section('mainContent')


	 <div class="container-fluid" style="background: #F1F3F6">
      <div class="row mt-3" style="margin-bottom: -15px;">
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card border-primary border-left-sm">
            <div class="card-body">
              <div class="media">
              <div class="media-body text-left">
                <h4 class="text-primary">4500</h4>
                <span class="text-primary">Total Customers</span>
              </div>
              <div class="align-self-center w-circle-icon rounded-circle gradient-scooter">
                <i class="fa fa-handshake-o"></i>
              </div>
             </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card border-primary border-left-sm">
            <div class="card-body">
              <div class="media">
               <div class="media-body text-left">
                <h4 class="text-primary">7850</h4>
                <span class="text-primary">Total Product</span>
              </div>
               <div class="align-self-center w-circle-icon rounded-circle gradient-scooter">
                <i class="ti-bag"></i>
              </div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card border-primary border-left-sm">
            <div class="card-body">
              <div class="media">
              <div class="media-body text-left">
                <h4 class="text-primary">100</h4>
                <span class="text-primary">Total Supplier</span>
              </div>
              <div class="align-self-center w-circle-icon rounded-circle gradient-scooter">
                <i class="ti-user"></i>
              </div>
            </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card border-primary border-left-sm">
            <div class="card-body">
              <div class="media">
              <div class="media-body text-left">
                <h4 class="text-primary">8400</h4>
                <span class="text-primary">Total Invoice</span>
              </div>
              <div class="align-self-center w-circle-icon rounded-circle gradient-scooter">
                <i class="ti-layout-accordion-list"></i>
              </div>
            </div>
            </div>
          </div>
        </div>
      </div><!--End Row-->

    <section class="content">
        <!-- Alert Message -->
        <hr class="mb-4">
        <!-- Second Counter -->
      <div class="row mt-3">
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card">
            <div class="card-body">
                <div class="text-center" style="font-size: 20px;">
                  <div class="text-center" style="font-size: 60px;">
                      <i class="fa fa-file-text" aria-hidden="true"></i>
                  </div>
                  <a href="#" class="text-primary">Create POS Invoice</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card">
            <div class="card-body">
                <div class="text-center" style="font-size: 20px;">
                  <div class="text-center" style="font-size: 60px;">
                      <i class="fa fa-file" aria-hidden="true"></i>
                  </div>
                  <a href="#" class="text-primary">Create New Invoice</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card">
            <div class="card-body">
                <div class="text-center" style="font-size: 20px;">
                  <div class="text-center" style="font-size: 60px;">
                      <i class="fa fa-shopping-basket" aria-hidden="true"></i>
                  </div>
                  <a href="#" class="text-primary">Add Item</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card">
            <div class="card-body">
                <div class="text-center" style="font-size: 20px;">
                  <div class="text-center" style="font-size: 60px;">
                      <i class="fa fa-female" aria-hidden="true"></i>
                  </div>
                  <a href="#" class="text-primary">Add Customer</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card">
            <div class="card-body">
                <div class="text-center" style="font-size: 20px;">
                  <div class="text-center" style="font-size: 60px;">
                      <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                  </div>
                  <a href="#" class="text-primary">Sales Report</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card">
            <div class="card-body">
                <div class="text-center" style="font-size: 20px;">
                  <div class="text-center" style="font-size: 60px;">
                      <i class="fa fa-building" aria-hidden="true"></i>
                  </div>
                  <a href="#" class="text-primary">Purchase Report</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card">
            <div class="card-body">
                <div class="text-center" style="font-size: 20px;">
                  <div class="text-center" style="font-size: 60px;">
                      <i class="fa fa-line-chart" aria-hidden="true"></i>
                  </div>
                  <a href="#" class="text-primary">Stock Report</a>
              </div>
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-3">
          <div class="card">
            <div class="card-body">
                <div class="text-center" style="font-size: 20px;">
                  <div class="text-center" style="font-size: 60px;">
                      <i class="fa fa-credit-card"></i>
                  </div>
                  <a href="#" class="text-primary">Stock Return</a>
              </div>
            </div>
          </div>
        </div>

        </div>
          <hr><br>
            <div class="row">
                <div class="col-sm-12 col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <div class="panel-title">
                                <h4 style="display: inline-block; line-height: 34px;"> Best Sale Product</h4>
                                <a href="#" style="display: inline-block; float: right;"><button class="btn btn-primary">See All</button></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <canvas id="lineChart" height="142"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="panel-title">
                                <h4 class="text-center">Todays Overview</h4>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="message_inner">
                                <div class="message_widgets">
                                    <table class="table table-bordered table-striped table-hover">
                                        <tr>
                                            <th>Todays Report</th>
                                            <th>TK</th>
                                        </tr>
                                        <tr>
                                            <th>Total Sales</th>
                                            <td>৳  0.00</td>
                                        </tr>
                                        <tr>
                                            <th>Total Purchase</th>
                                            <td>৳  0.00</td>
                                        </tr>
                                    </table>
                                    <table class="table table-bordered table-striped table-hover">
                                        <tr>
                                            <th>Last Sales</th>
                                            <th>TK</th>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> 
</div> 

    </div>
    <script src="http://softest8.bdtask.com/saleserp_multistor/assets/plugins/chartJs/Chart.min.js" type="text/javascript"></script>
    <script type="text/javascript">
    //line chart
    var ctx = document.getElementById("lineChart");
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
//            labels: ["January", "February", "March", "April", "May", "June", "July","August","September","October","November","December"],
            labels: ["Second Item", "Battery12"],
            datasets: [
                {
                    label: "Sales Product",
                    fillColor: "#000000",
                    strokeColor: "#000000",
                    pointColor: "#000000",
                    pointStrokeColor: "#000000",
                    pointHighlightFill: "#000000",
                    pointHighlightStroke: "#000000",
                    maintainAspectRatio: false,
                    scaleFontColor: "#000000",
                    pointLabelFontColor: "#000000",
                    pointLabelFontSize: 30,
                    data: [11, 5]
                }
//                ,
//                {
//                    label: "Purchase",
//                    borderColor: "#73BC4D",
//                    borderWidth: "1",
//                    backgroundColor: "#73BC4D",
//                    pointHighlightStroke: "rgba(26,179,148,1)",
//                    data: [
//                    2, // 
//                    ]
//                }
            ]
        },
        options: {
            responsive: true,
            tooltips: {
                mode: 'index',
                intersect: false
            },
            hover: {
                mode: 'nearest',
                intersect: true
            },
            scales: {
                xAxes: [{
                        display: true,
                        scaleLabel: {
                            display: true,
                            labelString: 'Products'
                        }
                    }],
                yAxes: [{
                        display: true,
                        ticks: {
                            beginAtZero: true,
                            steps: 10,
                            stepValue: 5,
                            max: 21                        },
                        scaleLabel: {
                            display: true,
                            labelString: 'Quantity'
                        }
                    }]
            },
            "animation": {
                "duration": 1,
                "onComplete": function () {
                    var chartInstance = this.chart,
                            ctx = chartInstance.ctx;

                    // ctx.font = Chart.helpers.fontString(Chart.defaults.global.defaultFontSize, Chart.defaults.global.defaultFontStyle, Chart.defaults.global.defaultFontFamily);
                    ctx.color = '#000000';
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'bottom';

                    this.data.datasets.forEach(function (dataset, i) {
                        var meta = chartInstance.controller.getDatasetMeta(i);
                        meta.data.forEach(function (bar, index) {
                            var data = dataset.data[index];
                            ctx.fillText(data, bar._model.x, bar._model.y - 5);
                        });
                    });
                }
            }
        }


    });

    //
</script>

@endsection
  
@section('footer')
  Copyright © 2019 Phoenix Software. All rights reserved.
@endsection