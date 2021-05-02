   <!-- Content Wrapper. Contains page content -->
   <div class="content-wrapper">
     <!-- Content Header (Page header) -->
     <section class="content-header">
       <div class="container-fluid">
         <div class="row mb-2">
           <div class="col-sm-6">
             <h1>Nilai Kinerja Organisasi 2018</h1>
           </div>
           <div class="col-sm-5">
             <ol class="breadcrumb float-sm-right">
               <!-- <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li> -->
               <a href="<?= base_url("$main/create") ?>" type="button" class="btn btn-primary"> Tambah <i class="fas fa-plus"></i></a>
             </ol>
           </div>
         </div>
       </div><!-- /.container-fluid -->
     </section>

     <!-- Main content -->
     <section class="content">
       <div class="container-fluid">

         <div class="row">
           <?php
            foreach ($rows as $row) :
              $target = explode("#", $row->target)[3];    // [3] -> Q4
              $realisasi = explode("#", $row->realisasi)[3];    // [3] -> Q4
              $capaian = explode("#", $row->capaian)[3];    // [3] -> Q4
              $colors = array("#3c8dbc", "#f56954", "#0fa65a", "#f39c12", "#00c0f0");
              $random_color = $colors[array_rand($colors, 1)];
            ?>

             <div class="col-6 col-md-3 mb-4 text-center">
               <div class="knob-label"><b><a href='<?= base_url($row->main . "/" . $row->sub) ?>'><?= $row->nama_iku ?></b></a></div>
               <input type="text" class="knob" value="<?= $capaian ?>" data-min="0" data-max="120" data-width="90" data-height="90" data-fgColor="<?= $random_color ?>" readonly>

               <div class="knob-label">Target : <?= $target ?>%</div>
               <div class="knob-label">Realisasi : <?= $realisasi ?>%</div>
             </div>
             <!-- ./col -->

           <?php endforeach; ?>
         </div>
         <!-- /.row -->

       </div><!-- /.container-fluid -->
     </section>
     <!-- /.content -->
   </div>
   <!-- /.content-wrapper -->