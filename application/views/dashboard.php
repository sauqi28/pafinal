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
                      <p class="text-muted mb-0 fw-semibold">Total Unstructure Files</p>
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
                    </br>
                    </br>
                    </br>
                    </br>
                    </br>
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

          <!--end Rightbar/offcanvas-->
          <!--end Rightbar-->

          <!--Start Footer-->
          <!-- Footer Start -->
          <footer class="footer text-center text-sm-start">
            &copy;
            <script>
              document.write(new Date().getFullYear())
            </script> Unikit <span class="text-muted d-none d-sm-inline-block float-end">By Divisi TI</span>
          </footer>
          <!-- end Footer -->
          <!--end footer-->
        </div>
        <!-- end page content -->
      </div>

      <?php $this->load->view('project/element/footer'); ?>

      </body>

      </html>