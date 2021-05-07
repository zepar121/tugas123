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
               <div id="myDIV" class="mb-3">
                 <button class="btn-chart active-btn-chart" onClick="changeData(0)">Capaian</button>
                 <button class="btn-chart" onClick="changeData(1)">Realisasi</button>
               </div>
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