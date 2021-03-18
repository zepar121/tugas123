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
              <a href="<?= base_url("{$row->main}/{$row->sub}/update") ?>" type="button" class="btn btn-primary"> Update <i class="fas fa-plus"></i></a>
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
              <h4>Capaian pada tahun 2019</h4>
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
                      <td>30%</td>
                      <td>40%</td>
                      <td>50%</td>
                      <td>70%</td>
                    </tr>
                    <tr>
                      <td>Realisasi</td>
                      <td>90%</td>
                      <td>90%</td>
                      <td>90%</td>
                      <td>90%</td>
                    </tr>
                    <tr>
                      <td>Capaian</td>
                      <td>120%</td>
                      <td>120%</td>
                      <td>120%</td>
                      <td>120%</td>
                    </tr>
                    </tbody>
                  </table>
                </div>
                <!-- /.col -->
              </div>
              <!-- /.row -->

              <!-- Table row -->
              <h4>Capaian pada tahun 2018</h4>
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
                      <td>30%</td>
                      <td>40%</td>
                      <td>50%</td>
                      <td>70%</td>
                    </tr>
                    <tr>
                      <td>Realisasi</td>
                      <td>90%</td>
                      <td>90%</td>
                      <td>90%</td>
                      <td>90%</td>
                    </tr>
                    <tr>
                      <td>Capaian</td>
                      <td>120%</td>
                      <td>120%</td>
                      <td>120%</td>
                      <td>120%</td>
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
