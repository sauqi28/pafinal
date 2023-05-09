<?php $this->load->view('project/element/header'); ?>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<?php $this->load->view('project/element/sidebar'); ?>

<div class="page-wrapper">

  <div class="row">
    <div class="col-12">
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
            <div id="chart"></div>
            <script>
              var options = {
                chart: {
                  type: 'bar'
                },
                series: [{
                  name: 'Total Data',
                  data: [
                    <?php
                    foreach ($data as $row) {
                      echo '{ x: "' . $row['report_date'] . '", y: ' . $row['total_data'] . ' },';
                    }
                    ?>
                  ]
                }],
                xaxis: {
                  type: 'datetime',
                },
              }
              var chart = new ApexCharts(document.querySelector("#chart"), options);
              chart.render();
            </script>
          </div>
        </div><!--end card-body-->
      </div><!--end card-->
    </div>
  </div>




</div>

<?php $this->load->view('project/element/footer'); ?>

</body>

</html>