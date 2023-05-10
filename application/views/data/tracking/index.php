<?php $this->load->view('project/element/header'); ?>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

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


                    <?php $this->load->view('data/tracking/navbar'); ?>


                    <form class="d-flex" method="POST" action="<?php echo base_url('tracking/index'); ?>">
                      <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search" aria-label="Recipient's username" aria-describedby="basic-addon2" name="search" value="<?php echo $this->input->get('search'); ?>" autofocus id="search-input">
                        <button class="btn btn-secondary" type="submit" id="button-addon2"><i class="fas fa-search"></i></button>
                      </div>
                    </form>

                    <script src="https://unpkg.com/sweetalert2@10"></script>
                    <script>
                      $(document).ready(function() {
                        $('form').on('submit', function(e) {
                          e.preventDefault();
                          Swal.fire({
                            title: 'Loading...',
                            allowOutsideClick: false,
                            onBeforeOpen: () => {
                              Swal.showLoading()
                            },
                          });

                          $.ajax({
                            type: "POST",
                            url: $(this).attr('action'),
                            data: $(this).serialize(),
                            dataType: 'json', // Tambahkan ini untuk memastikan respons dianggap sebagai JSON
                            success: function(data) {
                              Swal.close();
                              // Update tabel dengan data baru
                              updateTable(data);
                            },
                            error: function(error) {
                              Swal.close();
                              // tampilkan pesan error
                              Swal.fire('Error', 'Terjadi kesalahan saat memuat data', 'error');
                            }
                          });
                        });
                      });

                      function updateTable(data) {
                        // Mengambil referensi ke tbody dalam tabel Anda
                        var tbody = $('table.table tbody');

                        // Menghapus baris yang ada
                        tbody.empty();

                        // Cek jika data adalah array, jika bukan, ubah menjadi array
                        if (!Array.isArray(data)) {
                          data = [data];
                        }

                        // Iterasi melalui setiap item dalam data
                        $.each(data, function(i, item) {
                          // Membuat baris baru
                          var row = $('<tr>');

                          // Menambahkan kolom ke baris
                          $('<td>').text(i + 1).appendTo(row);
                          $('<td>').text(item.Number).appendTo(row);
                          $('<td>').text(item.ProductionOrderName).appendTo(row);
                          $('<td>').text(item.MachineType).appendTo(row);
                          $('<td>').text(item.Sequence).appendTo(row);
                          $('<td>').text(item.OperationMode).appendTo(row);

                          $('<td>').text(item.QualityOfBanknote).appendTo(row);
                          $('<td>').html('<div class="button-items"><button type="button" class="btn btn-xs btn-primary btn-icon-square-sm" onclick="goView(\'' + "/" + item.id + '\')"><i class="fas fa-eye"></i></button></div>').appendTo(row);

                          // Menambahkan baris ke tbody
                          tbody.append(row);
                        });
                      }
                    </script>


                    <script>
                      function moveCursorToPosition(el, pos) {
                        el.selectionStart = el.selectionEnd = pos;
                        el.focus();
                      }
                      document.addEventListener("DOMContentLoaded", function() {
                        const searchInput = document.getElementById("search-input");
                        moveCursorToPosition(searchInput, searchInput.value.length);
                      });
                    </script>
                  </div>
              </nav>
            </div>

            <!-- CONTENT -->
            <?php if ($this->session->flashdata('message')) : ?>
              <script>
                window.onload = function() {
                  const Toast = Swal.mixin({
                    toast: true,
                    position: 'top-end',
                    showConfirmButton: false,
                    timer: 3000,
                    timerProgressBar: true,
                    didOpen: (toast) => {
                      toast.addEventListener('mouseenter', Swal.stopTimer)
                      toast.addEventListener('mouseleave', Swal.resumeTimer)
                    }
                  })
                  Swal.fire({
                    icon: '<?php echo $this->session->flashdata('status'); ?>',
                    title: '<?php echo $this->session->flashdata('message'); ?>',
                    timer: 1500,
                    timerProgressBar: true,
                  })
                }
              </script>
            <?php endif; ?>



            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered mb-0 table-centered">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>Number</th>
                      <th>ProductionOrder</th>
                      <th>MachineID</th>
                      <th>Sequence</th>
                      <th>OperationMode</th>
                      <th>Quality</th>
                      <th class="text-end">Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <!-- Data akan dimuat oleh AJAX dan fungsi updateTable -->
                  </tbody>
                </table><!--end /table-->

              </div><!--end /tableresponsive-->
              </br>
              <?php echo $pagination; ?>

            </div>

            <!-- END OF CONTENT -->
          </div>
        </div>
      </div>

    </div>
    <script>
      function showConfirmation(var1, var2) {
        Swal.fire({
          title: 'User ' + var2,
          text: "akan dinonaktifkan?",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Ya, Nonaktifkan User!'
        }).then(function(result) {
          if (result.isConfirmed) {
            window.location.href = '<?php echo base_url('tracking/update_status/1/'); ?>' + var1;
          }
        });
      }

      function goEdit(var1) {
        window.location.href = '<?php echo base_url('tracking/edit/'); ?>' + var1;
      }

      function goView(var1) {
        window.location.href = '<?php echo base_url('tracking/view/'); ?>' + var1;
      }

      function goVerified(var1) {
        window.location.href = '<?php echo base_url('tracking/verified/'); ?>' + var1;
      }

      function verify_user(no_wa, id) {
        // if (confirm('Yakin Kirim pesan WhatsApp ke User Ini?')) {
        Swal.fire({
          title: 'Loading...',
          html: 'Sedang mengirim pesan WhatsApp. Mohon tunggu sebentar...',
          allowOutsideClick: false,
          allowEscapeKey: false,
          onOpen: function() {
            Swal.showLoading();
          }
        });

        $.post("<?php echo base_url('tracking/verify_user'); ?>", {
          no_wa: no_wa,
          id: id,
          <?php echo $this->security->get_csrf_token_name(); ?>: "<?php echo $this->security->get_csrf_hash(); ?>"
        }, function(response) {
          console.log(response.trim()) // Add this line to log the response
          if (response == 'success') {
            Swal.fire({
              icon: 'success',
              title: 'Berhasil dikirim',
              text: 'Pesan sudah berhasil dikirimkan'
            }).then((result) => {
              // if (result.isConfirmed) {
              //   window.location.href = "<?php echo base_url('tracking/index'); ?>";
              // }
            });
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Gagal dikirim',
              text: 'Terjadi kesalahan saat mengirim pesan WhatsApp.'
            });
          }
        });

      }


      function verify_signature(no_wa, id) {
        Swal.fire({
          title: 'Loading...',
          html: 'Sedang mengirim pesan WhatsApp. Mohon tunggu sebentar...',
          allowOutsideClick: false,
          allowEscapeKey: false,
          onOpen: function() {
            Swal.showLoading();
          }
        });

        $.post("<?php echo base_url('tracking/verify_signature'); ?>", {
          no_wa: no_wa,
          id: id,
          <?php echo $this->security->get_csrf_token_name(); ?>: "<?php echo $this->security->get_csrf_hash(); ?>"
        }, function(response) {
          console.log(response.trim()) // Add this line to log the response
          if (response == 'success') {
            Swal.fire({
              icon: 'success',
              title: 'Berhasil dikirim',
              text: 'Pesan sudah berhasil dikirimkan'
            }).then((result) => {
              // if (result.isConfirmed) {
              //   window.location.href = "<?php echo base_url('tracking/index'); ?>";
              // }
            });
          } else {
            Swal.fire({
              icon: 'error',
              title: 'Gagal dikirim',
              text: 'Terjadi kesalahan saat mengirim pesan WhatsApp.'
            });
          }
        });

      }
    </script>
    <!-- <script>
                      window.onload = function() {
                        const Toast = Swal.mixin({
                          toast: true,
                          position: 'top-end',
                          showConfirmButton: false,
                          timer: 3000,
                          timerProgressBar: true,
                          didOpen: (toast) => {
                            toast.addEventListener('mouseenter', Swal.stopTimer)
                            toast.addEventListener('mouseleave', Swal.resumeTimer)
                          }
                        })

                        Toast.fire({
                          icon: 'success',
                          title: 'Signed in successfully'
                        })
                      }
                    </script> -->









    <?php $this->load->view('project/element/footer1'); ?>
  </div>



</div>

<?php $this->load->view('project/element/footer'); ?>

</body>

</html>