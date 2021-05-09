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
             <a href="<?= base_url("v3/" . "nko2021") ?>" type="button" class="btn btn-primary"> Ubah Data <i class="fas fa-plus"></i></a>
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
                 <button class="btn-chart active-btn-chart" onClick="changeData(0)">1a-N</button>
                 <button class="btn-chart" onClick="changeData(1)">2a-CP</button>
                 <button class="btn-chart" onClick="changeData(2)">3a-CP</button>
                 <button class="btn-chart" onClick="changeData(3)">4a-N</button>
                 <button class="btn-chart" onClick="changeData(4)">5a-N</button>
                 <button class="btn-chart" onClick="changeData(5)">6a-N</button>
                 <button class="btn-chart" onClick="changeData(6)">6b-N</button>
                 <button class="btn-chart" onClick="changeData(7)">7a-N</button>
                 <button class="btn-chart" onClick="changeData(8)">8a-N</button>
                 <button class="btn-chart" onClick="changeData(9)">8b-N</button>
                 <button class="btn-chart" onClick="changeData(10)">9a-N</button>
                 <button class="btn-chart" onClick="changeData(11)">9b-N</button>
                 <button class="btn-chart" onClick="changeData(12)">9c-N</button>
                 <button class="btn-chart" onClick="changeData(13)">10a-N</button>
                 <button class="btn-chart" onClick="changeData(14)">11a-CP</button>
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