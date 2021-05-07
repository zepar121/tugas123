<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>
            Realisasi
          </h1>
        </div>
        <div class="col-sm-5">
          <ol class="breadcrumb float-sm-right">
            <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Invoice</li> -->
            <a href="<?= base_url("v2/{$row->main}/{$row->sub}/update") ?>" type="button" class="btn btn-primary"> Ubah <i class="fas fa-plus"></i></a>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <section class="content">
    <div class="container-fluid">
      <div class="row">
        <div class="col-12">
          <!-- Main content -->
          <div class="invoice p-3 mb-3">

            <?php if (isset($tabel_list)) : ?>
              <?php foreach ($tabel_list as $item) : ?>
                <!-- Table row -->
                <h4><?= $item["main_iku"] . " - " . $item["sub"] ?></h4>
                <div class="row">
                  <div class="col-5 table-responsive">
                    <table class="table table-striped">
                      <thead>
                        <tr>
                          <th>T/R/C</th>
                          <th>Q4</th>
                        </tr>
                      </thead>
                      <tbody>
                        <tr>
                          <td>Realisasi</td>
                          <td><?= $item["realisasi"]["Q4"] ?>%</td>
                        </tr>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              <?php endforeach; ?>
            <?php endif; ?>

          </div>
          <!-- /.invoice -->
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->