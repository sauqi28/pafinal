<?php $this->load->view('project/element/header'); ?>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<?php $this->load->view('project/element/sidebar'); ?>


<div class="page-wrapper">

  <!-- Page Content-->
  <div class="page-content-tab">

    <div class="container-fluid">
      <!-- Page-Title -->
      <div class="row">
        <div class="col-sm-12">
          <div class="page-title-box">
            <div class="float-end">
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Analisis</a>
                </li><!--end nav-item-->
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div>
            <h4 class="page-title">Dashboard</h4>
          </div><!--end page-title-box-->
        </div><!--end col-->
      </div>
      <!-- end page title end breadcrumb -->

      <div class="row">

        <div class="col-lg-12 order-lg-2 order-md-1 order-sm-1">
          <div class="row justify-content-center">
            <div class="col-lg-3 col-md-6">
              <div class="card overflow-hidden">
                <div class="card-body">
                  <div class="row d-flex">
                    <div class="col-3">
                      <i class="ti ti-users font-36 align-self-center text-dark"></i>
                    </div><!--end col-->
                    <div class="col-12 ms-auto align-self-center">
                      <div id="dash_spark_1" class="mb-3"></div>
                    </div><!--end col-->
                    <div class="col-12 ms-auto align-self-center">
                      <h3 class="text-dark my-0 font-22 fw-bold">24000</h3>
                      <p class="text-muted mb-0 fw-semibold">Sessions</p>
                    </div><!--end col-->
                  </div><!--end row-->
                </div><!--end card-body-->
              </div><!--end card-->
            </div> <!--end col-->
            <div class="col-lg-3 col-md-6">
              <div class="card overflow-hidden">
                <div class="card-body">
                  <div class="row d-flex">
                    <div class="col-3">
                      <i class="ti ti-clock font-36 align-self-center text-dark"></i>
                    </div><!--end col-->
                    <div class="col-auto ms-auto align-self-center">
                      <span class="badge badge-soft-success px-2 py-1 font-11">Active</span>
                    </div><!--end col-->
                    <div class="col-12 ms-auto align-self-center">
                      <div id="dash_spark_2" class="mb-3"></div>
                    </div><!--end col-->
                    <div class="col-12 ms-auto align-self-center">
                      <h3 class="text-dark my-0 font-22 fw-bold">00:18</h3>
                      <p class="text-muted mb-0 fw-semibold">Avg.Sessions</p>
                    </div><!--end col-->
                  </div><!--end row-->
                </div><!--end card-body-->
              </div><!--end card-->
            </div> <!--end col-->
            <div class="col-lg-3 col-md-6">
              <div class="card overflow-hidden">
                <div class="card-body">
                  <div class="row d-flex">
                    <div class="col-3">
                      <i class="ti ti-activity font-36 align-self-center text-dark"></i>
                    </div><!--end col-->
                    <div class="col-12 ms-auto align-self-center">
                      <div id="dash_spark_3" class="mb-3"></div>
                    </div><!--end col-->
                    <div class="col-12 ms-auto align-self-center">
                      <h3 class="text-dark my-0 font-22 fw-bold">$2400</h3>
                      <p class="text-muted mb-0 fw-semibold">Bounce Rate</p>
                    </div><!--end col-->
                  </div><!--end row-->
                </div><!--end card-body-->
              </div><!--end card-->
            </div> <!--end col-->

            <div class="col-lg-3 col-md-6">
              <div class="card overflow-hidden">
                <div class="card-body">
                  <div class="row d-flex">
                    <div class="col-3">
                      <i class="ti ti-confetti font-36 align-self-center text-dark"></i>
                    </div><!--end col-->
                    <div class="col-auto ms-auto align-self-center">
                      <span class="badge badge-soft-danger px-2 py-1 font-11">-2%</span>
                    </div><!--end col-->
                    <div class="col-12 ms-auto align-self-center">
                      <div id="dash_spark_4" class="mb-3"></div>
                    </div><!--end col-->
                    <div class="col-12 ms-auto align-self-center">
                      <h3 class="text-dark my-0 font-22 fw-bold">85000</h3>
                      <p class="text-muted mb-0 fw-semibold">Goal Completions</p>
                    </div><!--end col-->
                  </div><!--end row-->
                </div><!--end card-body-->
              </div><!--end card-->
            </div> <!--end col-->
          </div><!--end row-->
          <div class="row">
            <div class="col-8">
              <div class="card">
                <div class="card-header">
                  <div class="row align-items-center">
                    <div class="col">
                      <h4 class="card-title">Data Mesin Bulanan</h4>
                    </div><!--end col-->
                    <div class="col-auto">
                      <div class="dropdown">
                        <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          This Year<i class="las la-angle-down ms-1"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="#">Today</a>
                          <a class="dropdown-item" href="#">Last Week</a>
                          <a class="dropdown-item" href="#">Last Month</a>
                          <a class="dropdown-item" href="#">This Year</a>
                        </div>
                      </div>
                    </div><!--end col-->
                  </div> <!--end row-->
                </div><!--end card-header-->
                <div class="card-body">
                  <div class="">
                    <div id="chart"></div>
                    <script>
                      var options = {
                        chart: {
                          type: 'bar',
                          height: 380,
                          foreColor: '#ffffff',
                          events: {
                            dataPointSelection: function(event, chartContext, config) {
                              console.log(config)
                            }
                          },
                        },
                        colors: ['#e69138'],
                        series: [{
                          name: 'Total Data (in Juta)',
                          data: [
                            <?php
                            foreach ($grafik1 as $row) {
                              echo '{ x: "' . $row['report_date'] . '", y: ' . number_format($row['total_data'] / 1000000, 2) . ' },';
                            }
                            ?>
                          ],
                          colors: '#ffffff'
                        }],
                        xaxis: {
                          type: 'category',
                          labels: {
                            formatter: function(val) {
                              return val;
                            }
                          }
                        },
                        yaxis: {
                          title: {
                            text: 'Total Data (in Juta)'
                          },
                          labels: {
                            formatter: function(val) {
                              return val.toFixed(2);
                            },
                            style: {
                              color: '#ffffff'
                            }
                          }
                        },
                        tooltip: {
                          x: {
                            formatter: function(val) {
                              return val;
                            }
                          },
                          y: {
                            formatter: function(val) {
                              return val.toFixed(2) + " Juta";
                            }
                          }
                        }
                      };
                      var chart = new ApexCharts(document.querySelector("#chart"), options);
                      chart.render();
                    </script>
                  </div>
                </div>

              </div><!--end card-->
            </div>
            <div class="col-4">
              <div class="card">
                <div class="card-header">
                  <div class="row align-items-center">
                    <div class="col">
                      <h4 class="card-title">Data Mesin Tahunan</h4>
                    </div><!--end col-->
                    <div class="col-auto">
                      <div class="dropdown">
                        <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          This Year<i class="las la-angle-down ms-1"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="#">Today</a>
                          <a class="dropdown-item" href="#">Last Week</a>
                          <a class="dropdown-item" href="#">Last Month</a>
                          <a class="dropdown-item" href="#">This Year</a>
                        </div>
                      </div>
                    </div><!--end col-->
                  </div> <!--end row-->
                </div><!--end card-header-->
                <div class="card-body">
                  <div class="">
                    <div id="chart2"></div>
                    <script>
                      var options = {
                        series: [{
                          data: [
                            <?php
                            foreach ($grafik2 as $data) {
                              echo $data['total_data'] / 1000000 . ',';
                            }
                            ?>
                          ]
                        }],
                        chart: {
                          type: 'bar',
                          height: 350
                        },
                        plotOptions: {
                          bar: {
                            borderRadius: 4,
                            horizontal: true,
                          }
                        },
                        dataLabels: {
                          enabled: false
                        },
                        xaxis: {
                          categories: [
                            <?php
                            foreach ($grafik2 as $data) {
                              // echo '"' . $data['tahun'] . '",';

                              echo '{ x: "' . $data['tahun'] . '", y: ' . number_format($data['total_data'] / 1000000, 2) . ' },';
                            }
                            ?>
                          ],
                        },
                        yaxis: {
                          title: {
                            text: 'Total Data (in Juta)'
                          }
                        }
                      };

                      var chart = new ApexCharts(document.querySelector("#chart2"), options);
                      chart.render();
                    </script>
                  </div>
                </div>

              </div><!--end card-->
            </div>
          </div>
          <div class="row">
            <div class="col-9">
              <div class="card">
                <div class="card-header">
                  <div class="row align-items-center">
                    <div class="col">
                      <h4 class="card-title">Audience Overview</h4>
                    </div><!--end col-->
                    <div class="col-auto">
                      <div class="dropdown">
                        <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          This Year<i class="las la-angle-down ms-1"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="#">Today</a>
                          <a class="dropdown-item" href="#">Last Week</a>
                          <a class="dropdown-item" href="#">Last Month</a>
                          <a class="dropdown-item" href="#">This Year</a>
                        </div>
                      </div>
                    </div><!--end col-->
                  </div> <!--end row-->
                </div><!--end card-header-->
                <div class="card-body">
                  <div class="">
                    <div id="chart3"></div>

                    <script>
                      var options = {
                        series: [{
                          name: 'Cash Flow',
                          data: [1.45, 5.42, 5.9, -0.42, -12.6, -18.1, -18.2, -14.16, -11.1, -6.09, 0.34, 3.88, 13.07,
                            5.8, 2, 7.37, 8.1, 13.57, 15.75, 17.1, 19.8, -27.03, -54.4, -47.2, -43.3, -18.6, -
                            48.6, -41.1, -39.6, -37.6, -29.4, -21.4, -2.4
                          ]
                        }],
                        chart: {
                          type: 'bar',
                          height: 350
                        },
                        plotOptions: {
                          bar: {
                            colors: {
                              ranges: [{
                                from: -100,
                                to: -46,
                                color: '#F15B46'
                              }, {
                                from: -45,
                                to: 0,
                                color: '#FEB019'
                              }]
                            },
                            columnWidth: '80%',
                          }
                        },
                        dataLabels: {
                          enabled: false,
                        },
                        yaxis: {
                          title: {
                            text: 'Growth',
                          },
                          labels: {
                            formatter: function(y) {
                              return y.toFixed(0) + "%";
                            }
                          }
                        },
                        xaxis: {
                          type: 'datetime',
                          categories: [
                            '2011-01-01', '2011-02-01', '2011-03-01', '2011-04-01', '2011-05-01', '2011-06-01',
                            '2011-07-01', '2011-08-01', '2011-09-01', '2011-10-01', '2011-11-01', '2011-12-01',
                            '2012-01-01', '2012-02-01', '2012-03-01', '2012-04-01', '2012-05-01', '2012-06-01',
                            '2012-07-01', '2012-08-01', '2012-09-01', '2012-10-01', '2012-11-01', '2012-12-01',
                            '2013-01-01', '2013-02-01', '2013-03-01', '2013-04-01', '2013-05-01', '2013-06-01',
                            '2013-07-01', '2013-08-01', '2013-09-01'
                          ],
                          labels: {
                            rotate: -90
                          }
                        }
                      };

                      var chart = new ApexCharts(document.querySelector("#chart3"), options);
                      chart.render();
                    </script>
                  </div>
                </div>

              </div><!--end card-->
            </div>
          </div>
        </div><!--end col-->
      </div><!--end row-->

      <div class="row">
        <div class="col-lg-8">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">
                  <h4 class="card-title">Browser Used & Traffic Reports</h4>
                </div><!--end col-->
              </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body">
              <div class="table-responsive browser_users">
                <table class="table table-hover mb-0">
                  <thead class="thead-light">
                    <tr>
                      <th class="border-top-0">Browser</th>
                      <th class="border-top-0">Sessions</th>
                      <th class="border-top-0">Bounce Rate</th>
                      <th class="border-top-0">Transactions</th>
                    </tr><!--end tr-->
                  </thead>
                  <tbody>
                    <tr>
                      <td><img src="assets/images/logos/chrome.png" alt="" height="20" class="me-2">Chrome</td>
                      <td>10853<small class="text-muted">(52%)</small></td>
                      <td> 52.80%</td>
                      <td>566<small class="text-muted">(92%)</small></td>
                    </tr><!--end tr-->
                    <tr>
                      <td><img src="assets/images/logos/micro-edge.png" alt="" height="20" class="me-2">Microsoft Edge</td>
                      <td>2545<small class="text-muted">(47%)</small></td>
                      <td> 47.54%</td>
                      <td>498<small class="text-muted">(81%)</small></td>
                    </tr><!--end tr-->
                    <tr>
                      <td><img src="assets/images/logos/in-explorer.png" alt="" height="20" class="me-2">Internet-Explorer</td>
                      <td>1836<small class="text-muted">(38%)</small></td>
                      <td> 41.12%</td>
                      <td>455<small class="text-muted">(74%)</small></td>
                    </tr><!--end tr-->
                    <tr>
                      <td><img src="assets/images/logos/opera.png" alt="" height="20" class="me-2">Opera</td>
                      <td>1958<small class="text-muted">(31%)</small></td>
                      <td> 36.82%</td>
                      <td>361<small class="text-muted">(61%)</small></td>
                    </tr><!--end tr-->
                    <tr>
                      <td><img src="assets/images/logos/chrome.png" alt="" height="20" class="me-2">Chrome</td>
                      <td>10853<small class="text-muted">(52%)</small></td>
                      <td> 52.80%</td>
                      <td>566<small class="text-muted">(92%)</small></td>
                    </tr><!--end tr-->
                  </tbody>
                </table> <!--end table-->
              </div><!--end /div-->
            </div><!--end card-body-->
          </div><!--end card-->
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">
                  <h4 class="card-title">Browser Used & Traffic Reports</h4>
                </div><!--end col-->
              </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body">
              <div class="table-responsive browser_users">
                <table class="table mb-0">
                  <thead class="thead-light">
                    <tr>
                      <th class="border-top-0">Channel</th>
                      <th class="border-top-0">Sessions</th>
                      <th class="border-top-0">Prev.Period</th>
                      <th class="border-top-0">% Change</th>
                    </tr><!--end tr-->
                  </thead>
                  <tbody>
                    <tr>
                      <td><a href="" class="text-primary">Organic search</a></td>
                      <td>10853<small class="text-muted">(52%)</small></td>
                      <td>566<small class="text-muted">(92%)</small></td>
                      <td> 52.80% <i class="fas fa-caret-up text-success font-16"></i></td>
                    </tr><!--end tr-->
                    <tr>
                      <td><a href="" class="text-primary">Direct</a></td>
                      <td>2545<small class="text-muted">(47%)</small></td>
                      <td>498<small class="text-muted">(81%)</small></td>
                      <td> -17.20% <i class="fas fa-caret-down text-danger font-16"></i></td>

                    </tr><!--end tr-->
                    <tr>
                      <td><a href="" class="text-primary">Referal</a></td>
                      <td>1836<small class="text-muted">(38%)</small></td>
                      <td>455<small class="text-muted">(74%)</small></td>
                      <td> 41.12% <i class="fas fa-caret-up text-success font-16"></i></td>

                    </tr><!--end tr-->
                    <tr>
                      <td><a href="" class="text-primary">Email</a></td>
                      <td>1958<small class="text-muted">(31%)</small></td>
                      <td>361<small class="text-muted">(61%)</small></td>
                      <td> -8.24% <i class="fas fa-caret-down text-danger font-16"></i></td>
                    </tr><!--end tr-->
                    <tr>
                      <td><a href="" class="text-primary">Social</a></td>
                      <td>1566<small class="text-muted">(26%)</small></td>
                      <td>299<small class="text-muted">(49%)</small></td>
                      <td> 29.33% <i class="fas fa-caret-up text-success"></i></td>
                    </tr><!--end tr-->
                  </tbody>
                </table> <!--end table-->
              </div><!--end /div-->
            </div><!--end card-body-->
          </div><!--end card-->
        </div> <!--end col-->
        <div class="col-lg-4">
          <div class="card">
            <div class="card-header">
              <div class="row align-items-center">
                <div class="col">
                  <h4 class="card-title">Sessions Device</h4>
                </div><!--end col-->
                <div class="col-auto">
                  <div class="dropdown">
                    <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      All<i class="las la-angle-down ms-1"></i>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end">
                      <a class="dropdown-item" href="#">Purchases</a>
                      <a class="dropdown-item" href="#">Emails</a>
                    </div>
                  </div>
                </div><!--end col-->
              </div> <!--end row-->
            </div><!--end card-header-->
            <div class="card-body">
              <div class="text-center">
                <div id="ana_device" class="apex-charts"></div>
                <h6 class="bg-light-alt py-3 px-2 mb-0">
                  <i data-feather="calendar" class="align-self-center icon-xs me-1"></i>
                  01 January 2020 to 31 December 2020
                </h6>
              </div>
              <div class="table-responsive mt-2">
                <table class="table border-dashed mb-0">
                  <thead>
                    <tr>
                      <th>Device</th>
                      <th class="text-end">Sassions</th>
                      <th class="text-end">Day</th>
                      <th class="text-end">Week</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <td>Dasktops</td>
                      <td class="text-end">1843</td>
                      <td class="text-end">-3</td>
                      <td class="text-end">-12</td>
                    </tr>
                    <tr>
                      <td>Tablets</td>
                      <td class="text-end">2543</td>
                      <td class="text-end">-5</td>
                      <td class="text-end">-2</td>
                    </tr>
                    <tr>
                      <td>Mobiles</td>
                      <td class="text-end">3654</td>
                      <td class="text-end">-5</td>
                      <td class="text-end">-6</td>
                    </tr>

                  </tbody>
                </table><!--end /table-->
              </div><!--end /div-->
            </div><!--end card-body-->
          </div><!--end card-->
          <div class="card">
            <div class="card-body">
              <div class="d-flex">
                <h3 class="m-0 align-self-center fw-bold font-22">80</h3>
                <div class="d-block ms-3 align-self-center">
                  <span class="badge bg-soft-primary px-2 py-1 font-11">Right now</span>
                  <h5 class="my-2">Traffic Sources</h5>
                  <p class="mb-2 text-muted">It is a long established fact that a reader will
                    be of a page when looking at its layout.
                  </p>
                  <a href="" class="btn btn-primary">Read More <i class="las la-arrow-right"></i></a>
                </div>
              </div>
            </div><!--end card-body-->
          </div><!--end card-->
        </div> <!--end col-->

      </div><!--end row-->
    </div><!-- container -->

    <!--Start Rightbar-->
    <!--Start Rightbar/offcanvas-->
    <div class="offcanvas offcanvas-end" tabindex="-1" id="Appearance" aria-labelledby="AppearanceLabel">
      <div class="offcanvas-header border-bottom">
        <h5 class="m-0 font-14" id="AppearanceLabel">Appearance</h5>
        <button type="button" class="btn-close text-reset p-0 m-0 align-self-center" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body">
        <h6>Account Settings</h6>
        <div class="p-2 text-start mt-3">
          <div class="form-check form-switch mb-2">
            <input class="form-check-input" type="checkbox" id="settings-switch1">
            <label class="form-check-label" for="settings-switch1">Auto updates</label>
          </div><!--end form-switch-->
          <div class="form-check form-switch mb-2">
            <input class="form-check-input" type="checkbox" id="settings-switch2" checked>
            <label class="form-check-label" for="settings-switch2">Location Permission</label>
          </div><!--end form-switch-->
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="settings-switch3">
            <label class="form-check-label" for="settings-switch3">Show offline Contacts</label>
          </div><!--end form-switch-->
        </div><!--end /div-->
        <h6>General Settings</h6>
        <div class="p-2 text-start mt-3">
          <div class="form-check form-switch mb-2">
            <input class="form-check-input" type="checkbox" id="settings-switch4">
            <label class="form-check-label" for="settings-switch4">Show me Online</label>
          </div><!--end form-switch-->
          <div class="form-check form-switch mb-2">
            <input class="form-check-input" type="checkbox" id="settings-switch5" checked>
            <label class="form-check-label" for="settings-switch5">Status visible to all</label>
          </div><!--end form-switch-->
          <div class="form-check form-switch">
            <input class="form-check-input" type="checkbox" id="settings-switch6">
            <label class="form-check-label" for="settings-switch6">Notifications Popup</label>
          </div><!--end form-switch-->
        </div><!--end /div-->
      </div><!--end offcanvas-body-->
    </div>
    <!--end Rightbar/offcanvas-->
    <!--end Rightbar-->

    <!--Start Footer-->
    <!-- Footer Start -->
    <footer class="footer text-center text-sm-start">
      &copy;
      <script>
        document.write(new Date().getFullYear())
      </script> Unikit <span class="text-muted d-none d-sm-inline-block float-end">Crafted with <i class="mdi mdi-heart text-danger"></i> by Mannatthemes</span>
    </footer>
    <!-- end Footer -->
    <!--end footer-->
  </div>
  <!-- end page content -->
</div>

<?php $this->load->view('project/element/footer'); ?>

</body>

</html>