<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1><?= $row->judul ?></h1>
          </div>
          <div class="col-sm-5">
            <ol class="breadcrumb float-sm-right">
              <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Invoice</li> -->
              <a href="<?= base_url("{$row->main}/{$row->sub}/update") ?>" type="button" class="btn btn-primary"> Ubah <i class="fas fa-plus"></i></a>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="callout callout-info">
              <h5><?= $row->nama_iku ?></h5>
              <?= $row->detail_iku ?>
            </div>

            <!-- Main content -->
            <div class="invoice p-3 mb-3">
              <!-- title row -->
              <div class="row">
                <div class="col-12">
                  <h4>
                    Isu Utama/Implikasi
                  </h4>
                </div>
                <!-- /.col -->
              </div>
              <!-- info row -->
              <div class="row invoice-info">
                <div class="col-sm-12 invoice-col">
                  <h5>Kinerja:</h5>
                  <?= $row->isi_sub_judul ?>
                    
                  <h5>Risiko: -</h5>
                </div>
                
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <h4><?= $data_tabel["judul_tabel"] ?></h4>
              <div class="row">
                <div class="col-5 table-responsive">
                  <table class="table table-striped">
                    <thead>
                    <tr>
                      <th>T/R/C</th>
                      <th>Q1</th>
                      <th>Q2</th>
                      <th>Q3</th>
                      <th>Q4</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                      <td>Target</td>
                      <td><?= $data_tabel["target"]["Q1"] ?>%</td>
                      <td><?= $data_tabel["target"]["Q2"] ?>%</td>
                      <td><?= $data_tabel["target"]["Q3"] ?>%</td>
                      <td><?= $data_tabel["target"]["Q4"] ?>%</td>
                    </tr>
                    <tr>
                      <td>Realisasi</td>
                      <td><?= $data_tabel["realisasi"]["Q1"] ?>%</td>
                      <td><?= $data_tabel["realisasi"]["Q2"] ?>%</td>
                      <td><?= $data_tabel["realisasi"]["Q3"] ?>%</td>
                      <td><?= $data_tabel["realisasi"]["Q4"] ?>%</td>
                    </tr>
                    <tr>
                      <td>Capaian</td>
                      <td><?= $data_tabel["capaian"]["Q1"] ?>%</td>
                      <td><?= $data_tabel["capaian"]["Q2"] ?>%</td>
                      <td><?= $data_tabel["capaian"]["Q3"] ?>%</td>
                      <td><?= $data_tabel["capaian"]["Q4"] ?>%</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->
              
            </div>
            <!-- /.invoice -->
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
