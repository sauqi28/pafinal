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
                      <i class="mdi mdi-settings font-36 align-self-center text-dark"></i>
                    </div><!--end col-->
                    <div class="col-auto ms-auto align-self-center">
                      <span class="badge badge-soft-success px-2 py-1 font-11">Active</span>
                    </div><!--end col-->
                    <div class="col-12 ms-auto align-self-center">
                      <div id="dash_spark_1" class="mb-3"></div>
                    </div><!--end col-->
                    <div class="col-12 ms-auto align-self-center">
                      <h3 class="text-dark my-0 font-22 fw-bold"><?php echo $total_mesin; ?></h3>
                      <p class="text-muted mb-0 fw-semibold">Jumlah Mesin Termonitor</p>
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
                      <i class="mdi mdi-book-outline font-36 align-self-center text-dark"></i>
                    </div><!--end col-->

                    <div class="col-12 ms-auto align-self-center">
                      <div id="dash_spark_2" class="mb-3"></div>
                    </div><!--end col-->
                    <div class="col-12 ms-auto align-self-center">
                      <h3 class="text-dark my-0 font-22 fw-bold"><?php echo $total_po; ?></h3>
                      <p class="text-muted mb-0 fw-semibold">Total Production Order</p>
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
                      <i class="mdi mdi-database-edit font-36 align-self-center text-dark"></i>
                    </div><!--end col-->
                    <div class="col-12 ms-auto align-self-center">
                      <div id="dash_spark_3" class="mb-3"></div>
                    </div><!--end col-->
                    <div class="col-12 ms-auto align-self-center">
                      <h3 class="text-dark my-0 font-22 fw-bold"><?php echo number_format($total_data / 1000000, 2) . " juta"; ?></h3>
                      <p class="text-muted mb-0 fw-semibold">Total Data</p>
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
                      <i class="mdi mdi-database-import font-36 align-self-center text-dark"></i>
                    </div><!--end col-->

                    <div class="col-12 ms-auto align-self-center">
                      <div id="dash_spark_4" class="mb-3"></div>
                    </div><!--end col-->
                    <div class="col-12 ms-auto align-self-center">
                      <h3 class="text-dark my-0 font-22 fw-bold"><?php echo number_format($raw_data, 2) . " Gb"; ?></h3>
                      <p class="text-muted mb-0 fw-semibold">Data Size</p>
                    </div><!--end col-->
                  </div><!--end row-->
                </div><!--end card-body-->
              </div><!--end card-->
            </div> <!--end col-->
          </div><!--end row-->
          <div class="row">
            <!-- <div class="col-3 col-lg-3 order-lg-1 order-md-2 order-sm-2">
              <div class="card overflow-hidden">
                <div class="card-body">
                  <div class="pt-3">
                    <h3 class="text-dark text-center font-24 fw-bold line-height-lg">Data Mesin
                      <br>Peruri
                    </h3>
                    <div class="text-center text-muted font-16 fw-bold pt-3 pb-1">Laporan Data Mesin</div>

                    <div class="text-center py-3 mb-3">
                      <a href="#" class="btn btn-success">Report</a>
                    </div>
                    <img src="assets/images/small/business.png" alt="" class="img-fluid px-3 mb-2">
                  </div>
                </div>
              </div>
            </div> end col -->

            <div class="col-8">
              <div class="card">
                <div class="card-header">
                  <div class="row align-items-center">
                    <div class="col">
                      <h4 class="card-title">Data Mesin Bulanan</h4>
                    </div><!--end col-->
                    <div class="col-auto">
                      <!-- <div class="dropdown">
                        <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          This Year<i class="las la-angle-down ms-1"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="#">Today</a>
                          <a class="dropdown-item" href="#">Last Week</a>
                          <a class="dropdown-item" href="#">Last Month</a>
                          <a class="dropdown-item" href="#">This Year</a>
                        </div>
                      </div> -->
                    </div><!--end col-->
                  </div> <!--end row-->
                </div><!--end card-header-->
                <div class="card-body">
                  <div class="">
                    <div id="chart"></div>
                    <script>
                      var options = {
                        series: [{
                          name: 'Total Data (in Juta)',
                          data: [
                            <?php
                            foreach ($grafik1 as $row) {
                              echo '{ x: "' . $row['report_date'] . '", y: ' . number_format($row['total_data'] / 1000000, 2) . ' },';
                            }
                            ?>
                          ]
                        }],
                        chart: {
                          height: 380,
                          type: 'bar',
                        },
                        plotOptions: {
                          bar: {
                            borderRadius: 5,
                            dataLabels: {
                              position: 'top',
                            },
                          }
                        },
                        dataLabels: {
                          enabled: true,
                          formatter: function(val) {
                            return val + " Juta";
                          },
                          offsetY: -20,
                          style: {
                            fontSize: '12px',
                            colors: ["#304758"]
                          }
                        },
                        xaxis: {
                          categories: [
                            <?php
                            foreach ($grafik1 as $row) {
                              echo '"' . $row['report_date'] . '",';
                            }
                            ?>
                          ],
                          position: 'top',
                          axisBorder: {
                            show: false
                          },
                          axisTicks: {
                            show: false
                          },
                          crosshairs: {
                            fill: {
                              type: 'gradient',
                              gradient: {
                                colorFrom: '#D8E3F0',
                                colorTo: '#BED1E6',
                                stops: [0, 100],
                                opacityFrom: 0.4,
                                opacityTo: 0.5,
                              }
                            }
                          },
                          tooltip: {
                            enabled: true,
                          }
                        },
                        yaxis: {
                          axisBorder: {
                            show: false
                          },
                          axisTicks: {
                            show: false,
                          },
                          labels: {
                            show: false,
                            formatter: function(val) {
                              return val + " Juta";
                            }
                          }

                        },
                        title: {
                          text: '',
                          floating: true,
                          offsetY: 330,
                          align: 'center',
                          style: {
                            color: '#444'
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
                      <!-- <div class="dropdown">
                        <a href="#" class="btn btn-sm btn-outline-light dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          This Year<i class="las la-angle-down ms-1"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end">
                          <a class="dropdown-item" href="#">Today</a>
                          <a class="dropdown-item" href="#">Last Week</a>
                          <a class="dropdown-item" href="#">Last Month</a>
                          <a class="dropdown-item" href="#">This Year</a>
                        </div>
                      </div> -->
                    </div><!--end col-->
                  </div> <!--end row-->
                </div><!--end card-header-->
                <div class="card-body">
                  <div class="">
                    <div id="chart2"></div>
                    <script>
                      var options = {
                        series: [
                          <?php
                          foreach ($grafik2 as $data) {
                            echo $data['total_data'] . ',';
                          }
                          ?>
                        ],
                        chart: {
                          width: 380,
                          height: 380,
                          type: 'pie',
                        },
                        labels: [
                          <?php
                          foreach ($grafik2 as $data) {
                            echo '"' . $data['tahun'] . '",';
                          }
                          ?>
                        ],
                        responsive: [{
                          breakpoint: 480,
                          options: {
                            chart: {
                              width: 200
                            },
                            legend: {
                              position: 'bottom'
                            }
                          }
                        }]
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

            </div> <!--end col-->

          </div>
        </div><!--end col-->
      </div><!--end row-->

      <div class="row">

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