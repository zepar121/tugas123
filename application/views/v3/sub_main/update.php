  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update</h1>
          </div>
          <div class="col-sm-5">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Create</li> -->
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Update</h3>

              <div class="card-tools">
                <!-- <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                  <i class="fas fa-minus"></i></button> -->
              </div>
            </div>
            <div class="card-body">
              <form id="form" action="process_update" method="POST">
                <input type="hidden" name="main" value="<?= $row->main ?>" />
                <input type="hidden" name="sub" value="<?= $row->sub ?>" />

                <div class="row">
                  <div class="col-md-7 table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>Bulan</th>
                          <th>2018</th>
                          <th>2019</th>
                          <th>2020</th>
                          <th>2021</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Januari</td>
                          <td><input type="text" name="tabel[januari][Q1]" class="form-control" value="<?= $data_tabel["januari"]["Q1"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[januari][Q2]" class="form-control" value="<?= $data_tabel["januari"]["Q2"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[januari][Q3]" class="form-control" value="<?= $data_tabel["januari"]["Q3"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[januari][Q4]" class="form-control" value="<?= $data_tabel["januari"]["Q4"] ?? "" ?>"></td>
                        </tr>
                        <tr>
                          <td>Februari</td>
                          <td><input type="text" name="tabel[februari][Q1]" class="form-control" value="<?= $data_tabel["februari"]["Q1"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[februari][Q2]" class="form-control" value="<?= $data_tabel["februari"]["Q2"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[februari][Q3]" class="form-control" value="<?= $data_tabel["februari"]["Q3"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[februari][Q4]" class="form-control" value="<?= $data_tabel["februari"]["Q4"] ?? "" ?>"></td>
                        </tr>
                        <tr>
                          <td>Maret</td>
                          <td><input type="text" name="tabel[maret][Q1]" class="form-control" value="<?= $data_tabel["maret"]["Q1"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[maret][Q2]" class="form-control" value="<?= $data_tabel["maret"]["Q2"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[maret][Q3]" class="form-control" value="<?= $data_tabel["maret"]["Q3"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[maret][Q4]" class="form-control" value="<?= $data_tabel["maret"]["Q4"] ?? "" ?>"></td>
                        </tr>
                        <tr>
                          <td>April</td>
                          <td><input type="text" name="tabel[april][Q1]" class="form-control" value="<?= $data_tabel["april"]["Q1"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[april][Q2]" class="form-control" value="<?= $data_tabel["april"]["Q2"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[april][Q3]" class="form-control" value="<?= $data_tabel["april"]["Q3"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[april][Q4]" class="form-control" value="<?= $data_tabel["april"]["Q4"] ?? "" ?>"></td>
                        </tr>
                        <tr>
                          <td>Mei</td>
                          <td><input type="text" name="tabel[mei][Q1]" class="form-control" value="<?= $data_tabel["mei"]["Q1"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[mei][Q2]" class="form-control" value="<?= $data_tabel["mei"]["Q2"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[mei][Q3]" class="form-control" value="<?= $data_tabel["mei"]["Q3"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[mei][Q4]" class="form-control" value="<?= $data_tabel["mei"]["Q4"] ?? "" ?>"></td>
                        </tr>
                        <tr>
                          <td>Juni</td>
                          <td><input type="text" name="tabel[juni][Q1]" class="form-control" value="<?= $data_tabel["juni"]["Q1"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[juni][Q2]" class="form-control" value="<?= $data_tabel["juni"]["Q2"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[juni][Q3]" class="form-control" value="<?= $data_tabel["juni"]["Q3"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[juni][Q4]" class="form-control" value="<?= $data_tabel["juni"]["Q4"] ?? "" ?>"></td>
                        </tr>
                        <tr>
                          <td>Juli</td>
                          <td><input type="text" name="tabel[juli][Q1]" class="form-control" value="<?= $data_tabel["juli"]["Q1"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[juli][Q2]" class="form-control" value="<?= $data_tabel["juli"]["Q2"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[juli][Q3]" class="form-control" value="<?= $data_tabel["juli"]["Q3"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[juli][Q4]" class="form-control" value="<?= $data_tabel["juli"]["Q4"] ?? "" ?>"></td>
                        </tr>
                        <tr>
                          <td>Agustus</td>
                          <td><input type="text" name="tabel[agustus][Q1]" class="form-control" value="<?= $data_tabel["agustus"]["Q1"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[agustus][Q2]" class="form-control" value="<?= $data_tabel["agustus"]["Q2"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[agustus][Q3]" class="form-control" value="<?= $data_tabel["agustus"]["Q3"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[agustus][Q4]" class="form-control" value="<?= $data_tabel["agustus"]["Q4"] ?? "" ?>"></td>
                        </tr>
                        <tr>
                          <td>September</td>
                          <td><input type="text" name="tabel[september][Q1]" class="form-control" value="<?= $data_tabel["september"]["Q1"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[september][Q2]" class="form-control" value="<?= $data_tabel["september"]["Q2"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[september][Q3]" class="form-control" value="<?= $data_tabel["september"]["Q3"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[september][Q4]" class="form-control" value="<?= $data_tabel["september"]["Q4"] ?? "" ?>"></td>
                        </tr>
                        <tr>
                          <td>Oktober</td>
                          <td><input type="text" name="tabel[oktober][Q1]" class="form-control" value="<?= $data_tabel["oktober"]["Q1"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[oktober][Q2]" class="form-control" value="<?= $data_tabel["oktober"]["Q2"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[oktober][Q3]" class="form-control" value="<?= $data_tabel["oktober"]["Q3"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[oktober][Q4]" class="form-control" value="<?= $data_tabel["oktober"]["Q4"] ?? "" ?>"></td>
                        </tr>
                        <tr>
                          <td>November</td>
                          <td><input type="text" name="tabel[november][Q1]" class="form-control" value="<?= $data_tabel["november"]["Q1"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[november][Q2]" class="form-control" value="<?= $data_tabel["november"]["Q2"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[november][Q3]" class="form-control" value="<?= $data_tabel["november"]["Q3"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[november][Q4]" class="form-control" value="<?= $data_tabel["november"]["Q4"] ?? "" ?>"></td>
                        </tr>
                        <tr>
                          <td>Desember</td>
                          <td><input type="text" name="tabel[desember][Q1]" class="form-control" value="<?= $data_tabel["desember"]["Q1"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[desember][Q2]" class="form-control" value="<?= $data_tabel["desember"]["Q2"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[desember][Q3]" class="form-control" value="<?= $data_tabel["desember"]["Q3"] ?? "" ?>"></td>
                          <td><input type="text" name="tabel[desember][Q4]" class="form-control" value="<?= $data_tabel["desember"]["Q4"] ?? "" ?>"></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->

                <form>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <!-- <a href="#" class="btn btn-secondary">Cancel</a> -->
          <input type="submit" value="Submit" class="btn btn-success float-right">
        </div>
      </div>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.0.0
    </div>
    <strong>Copyright &copy; 2014-2019 <a href="http://adminlte.io">AdminLTE.io</a>.</strong> All rights
    reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="<?php echo base_url(); ?>assets/adminlte3/plugins/jquery/jquery.min.js"></script>
  <!-- Bootstrap 4 -->
  <script src="<?php echo base_url(); ?>assets/adminlte3/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- AdminLTE App -->
  <script src="<?php echo base_url(); ?>assets/adminlte3/dist/js/adminlte.min.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="<?php echo base_url(); ?>assets/adminlte3/dist/js/demo.js"></script>
  <!-- Editor -->
  <script src="<?php echo base_url(); ?>assets/adminlte3/plugins/summernote/summernote-bs4.min.js"></script>
  <!-- SweetAlert2 -->
  <script src="<?php echo base_url(); ?>assets/adminlte3/plugins/sweetalert2/sweetalert2.min.js"></script>
  <!-- Toastr -->
  <script src="<?php echo base_url(); ?>assets/adminlte3/plugins/toastr/toastr.min.js"></script>
  <script>
    $(function() {
      // Summernote
      $('.textarea').summernote({
        height: 250
      }).on('summernote.change', function(we, contents, $editable) {
        $(this).val(contents);
      });
    })

    $('.textarea').summernote('code', "<?= $row->isi_sub_judul ?>");

    const Toast = Swal.mixin({
      toast: true,
      position: 'top',
      showConfirmButton: false,
      timer: 5000
    });

    $('form[id=form').submit(function(e) {
      e.preventDefault();

      $('.form-group').removeClass('has-error'); // remove the error class
      $('.help-block').remove(); // remove the error text
      $('.alert-success').remove();

      // var formData = {};

      // var datas = $(this).serializeArray();
      // datas.map(function(item, index, array) {
      //   formData[item.name] = item.value;
      // });

      // alert("Submitted");
      // alert(JSON.stringify(formData));

      var formUrl = "<?= base_url("v3/{$row->main}/{$row->sub}/process_update") ?>";
      var data = new FormData(this);

      // process the form
      $.ajax({
          type: 'POST',
          url: formUrl,
          data: data, //penggunaan FormData
          dataType: 'json', // what type of data do we expect back from the serverss
          processData: false,
          contentType: false,
          cache: false,
          async: false,
          error: function(data) {
            alert("AJAX ERROR")
            alert(JSON.stringify(data));
          }
        })

        // using the done promise callback
        .done(function(data) {

          // here we will handle errors and validation messages
          if (!data.success) {

            Toast.fire({
              type: 'error',
              title: data.message
            });

          } else {

            // ALL GOOD! just show the success message!
            Toast.fire({
              type: 'success',
              title: data.message
            });

            setTimeout(function() {
              window.location.href = "<?= base_url("v3/{$row->main}/{$row->sub}/update") ?>"; //will redirect to any page
            }, 2500); //will call the function after 2.5 secs.

          }
        });
    });
  </script>
  </body>

  </html>