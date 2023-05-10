<?php $this->load->view('project/element/header'); ?>
<?php $this->load->view('project/element/sidebar'); ?>


<div class="page-wrapper">

  <div class="page-content-tab">

    <div class="container-fluid">
      <div class="row">
        <div class="col-sm-12">
          <div class="page-title-box">
            <div class="float-end">
              <ol class="breadcrumb">

              </ol>
            </div>
            <!-- <h4 class="page-title">Navbar</h4> -->
          </div>
          <!--end page-title-box-->
        </div>
        <!--end col-->
      </div>
      <div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h4 class="card-title"><?php echo $title; ?></h4>
              <p class="text-muted mb-0"><?php echo $subtitle; ?>
                <!-- <code class="highlighter-rouge">background-color</code> utilities. -->
              </p>
            </div><!--end card-header-->
            <div class="card-body">

              <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">

                  <div class="collapse navbar-collapse" id="navbarSupportedContent6">




                  </div>
              </nav>
            </div>

            <!-- CONTENT -->




            <div class="card-body">






              <div class="row">
                <div class="col-lg-6">
                  <form action="<?= site_url('data_user/create'); ?>" method="post">


                    <div class="mb-3 row">
                      <label for="nip" class="col-sm-2 col-form-label text-end">Sync ID</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="nip" value="<?= $user['id_insert'] ?>" id="nip" disabled>
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <label for="username" class="col-sm-2 col-form-label text-end">Production Order Name</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="username" value="<?= $user['ProductionOrderName'] ?>" id="username" disabled>
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <label for="fullname" class="col-sm-2 col-form-label text-end">Machine Type</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="fullname" value="<?= $user['MachineType'] ?>" id="fullname" disabled>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="fullname" class="col-sm-2 col-form-label text-end">Machine Location</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="fullname" value="<?= $user['Description'] ?>" id="fullname" disabled>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="fullname" class="col-sm-2 col-form-label text-end">Machine Serial Number</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="fullname" value="<?= $user['MachineSerialNumber'] ?>" id="fullname" disabled>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="fullname" class="col-sm-2 col-form-label text-end">Report User Area</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="fullname" value="<?= $user['ReportUserArea'] ?>" id="fullname" disabled>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="fullname" class="col-sm-2 col-form-label text-end">Machine Site Abbreviation</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="fullname" value="<?= $user['MachineSiteAbbreviation'] ?>" id="fullname" disabled>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="fullname" class="col-sm-2 col-form-label text-end">Report Section Data Type</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="fullname" value="<?= $user['ReportSectionDataType'] ?>" id="fullname" disabled>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="fullname" class="col-sm-2 col-form-label text-end">Report Section Data Number</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="fullname" value="<?= $user['ReportSectionDataNumber'] ?>" id="fullname" disabled>
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <label for="fullname" class="col-sm-2 col-form-label text-end">Report Section Data State</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="text" name="fullname" value="<?= $user['ReportSectionDataState'] ?>" id="fullname" disabled>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="position" class="col-sm-2 col-form-label text-end">IPP Number</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="email" name="email" value="<?= $user['IPPNumber'] ?>" id="email" disabled>
                      </div>
                    </div>





                    <!-- END OF CONTENT -->

                </div>
                <div class="col-lg-6">
                  <form action="<?= site_url('data_user/create'); ?>" method="post">


                    <div class="mb-3 row">
                      <label for="position" class="col-sm-2 col-form-label text-end">Quality</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="email" name="email" value="<?= $user['QualityOfBanknote'] ?>" id="email" disabled>
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <label for="role" class="col-sm-2 col-form-label text-end">Operation Mode</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="email" name="email" value="<?= $user['OperationMode'] ?>" id="email" disabled>
                      </div>
                    </div>

                    <div class="mb-3 row">
                      <label for="kategori" class="col-sm-2 col-form-label text-end">Output Stacker</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="email" name="email" value="<?= $user['OutputStacker'] ?>" id="email" disabled>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="kategori" class="col-sm-2 col-form-label text-end">OPP</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="email" name="email" value="<?= $user['OPP'] ?>" id="email" disabled>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="kategori" class="col-sm-2 col-form-label text-end">OPBP</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="email" name="email" value="<?= $user['OPBP'] ?>" id="email" disabled>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="kategori" class="col-sm-2 col-form-label text-end">OPA</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="email" name="email" value="<?= $user['OPA'] ?>" id="email" disabled>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="kategori" class="col-sm-2 col-form-label text-end">Report Name</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="email" name="email" value="<?= $user['ReportName'] ?>" id="email" disabled>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="kategori" class="col-sm-2 col-form-label text-end">Report Time</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="email" name="email" value="<?= $user['ReportGenerationTime'] ?>" id="email" disabled>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="kategori" class="col-sm-2 col-form-label text-end">Start Datetime</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="email" name="email" value="<?= $user['ReportSectionDataStartDate_1'] ?>" id="email" disabled>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="kategori" class="col-sm-2 col-form-label text-end">End Datetime</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="email" name="email" value="<?= $user['ReportSectionDataEndDate_1'] ?>" id="email" disabled>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="kategori" class="col-sm-2 col-form-label text-end">FileName</label>
                      <div class="col-sm-10">
                        <input class="form-control" type="email" name="email" value="<?= $user['file_name'] ?>" id="email" disabled>
                      </div>
                    </div>






                    <!-- END OF CONTENT -->

                </div>

              </div>

            </div>
          </div>
        </div>
      </div>

      <script>
        function goEdit(var1) {
          window.location.href = '<?php echo base_url('data_user/edit/'); ?>' + var1;
        }
      </script>


      <?php $this->load->view('project/element/footer1'); ?>
    </div>



  </div>

  <?php $this->load->view('project/element/footer'); ?>

  </body>

  </html>