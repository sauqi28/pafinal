<?php $this->load->view('project/element/header'); ?>
<script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
<?php $this->load->view('project/element/sidebar'); ?>

<div class="page-wrapper">

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

<?php $this->load->view('project/element/footer'); ?>

</body>

</html>