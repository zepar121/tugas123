 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">

   <section class="content-header">
     <div class="container-fluid">
       <div class="row mb-2">
         <div class="col-sm-6">
           <h1>Sistem Informasi Kepatuhan Internal dan Penyuluhan KPPBC TMP C Meulaboh</h1>
         </div>
         <div class="col-sm-6">
           <ol class="breadcrumb float-sm-right">
             <li class="breadcrumb-item"><a href="#">Home</a></li>
             <li class="breadcrumb-item active">Dashboard</li>
           </ol>
         </div>
       </div>

       <!-- Small boxes (Stat box) -->
       <div class="row">
         <div class="col-lg-3 col-6">
           <!-- small box -->
           <div class="small-box bg-info">
             <div class="inner">
               <p>Nilai Kinerja Organisasi 2018</p>
             </div>
             <div class="icon">
               <i class="ion ion-bag"></i>
             </div>
             <a href="<?= base_url("v2/nko2018") ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
           </div>
         </div>
         <!-- ./col -->
         <div class="col-lg-3 col-6">
           <!-- small box -->
           <div class="small-box bg-success">
             <div class="inner">
               <p>Nilai Kinerja Organisasi 2019</p>
             </div>
             <div class="icon">
               <i class="ion ion-stats-bars"></i>
             </div>
             <a href="<?= base_url("v2/nko2019") ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
           </div>
         </div>
         <!-- ./col -->
         <div class="col-lg-3 col-6">
           <!-- small box -->
           <div class="small-box bg-warning">
             <div class="inner">
               <p>Nilai Kinerja Organisasi 2020</p>
             </div>
             <div class="icon">
               <i class="ion ion-person-add"></i>
             </div>
             <a href="<?= base_url("v2/nko2020") ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
           </div>
         </div>
         <!-- ./col -->
         <div class="col-lg-3 col-6">
           <!-- small box -->
           <div class="small-box bg-danger">
             <div class="inner">
               <p>Nilai Kinerja Organisasi 2021</p>
             </div>
             <div class="icon">
               <i class="ion ion-pie-graph"></i>
             </div>
             <a href="<?= base_url("v2/nko2021") ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
           </div>
         </div>
         <!-- ./col -->
       </div>
       <!-- /.row -->
     </div>
   </section>

   <!-- Main content -->
   <section class="content">
     <div class="container-fluid">
       <div class="row">

         <!-- col -->
         <div class="col-md-12">
           <!-- BAR CHART -->
           <div class="card card-success">
             <div class="card-header">
               <h3 class="card-title">Ini Judul</h3>

               <div class="card-tools">
                 <button type="button" class="btn btn-tool" data-card-widget="collapse">
                   <i class="fas fa-minus"></i>
                 </button>
                 <button type="button" class="btn btn-tool" data-card-widget="remove">
                   <i class="fas fa-times"></i>
                 </button>
               </div>
             </div>
             <div class="card-body">
               <div class="chart">
                 <canvas id="barChart" style="min-height: 400px; height: 400px; max-height: 400px; max-width: 100%;"></canvas>
               </div>
             </div>
             <!-- /.card-body -->
           </div>
           <!-- /.card -->
         </div>
         <!-- /.col -->

       </div>
       <!-- /.row -->
     </div><!-- /.container-fluid -->
   </section>
   <!-- /.content -->
 </div>
 <!-- /.content-wrapper -->