 <!-- Begin Page Content -->
 <div class="container-fluid">

     <!-- Page Heading -->

     <div class="d-sm-flex align-items-center justify-content-between mb-4">
         <h1 class="h3 mb-0 text-gray-800">Semangat Kerjanya!!!<i class="fa fa-smile mr-2 ml-2"></i>Kak <b><?= $_SESSION['username'] ?></b></h1>
     </div>
     <?php
        if ($_SESSION['level'] == 1) {
        ?>
         <!-- Content Row -->
         <div class="row">

             <!-- Earnings (Monthly) Card Example -->
             <div class="col-xl-3 col-md-6 mb-4">
                 <div class="card border-left-primary shadow h-100 py-2">
                     <div class="card-body">
                         <div class="row no-gutters align-items-center">
                             <div class="col ml-2">
                                 <div class="text-l font-weight-bold text-primary text-uppercase mb-1">
                                     Pendapatan Bersih</div>
                                 <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 40,000</div>
                             </div>
                             <div class="col-auto">
                                 <i class="fas fa-calendar fa-2x text-gray-300"></i>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Earnings (Monthly) Card Example -->
             <div class="col-xl-3 col-md-6 mb-4">
                 <div class="card border-left-success shadow h-100 py-2">
                     <div class="card-body">
                         <div class="row no-gutters align-items-center">
                             <div class="col ml-2">
                                 <div class="text-l font-weight-bold text-success text-uppercase mb-1">
                                     Pendapatan Kotor</div>
                                 <div class="h5 mb-0 font-weight-bold text-gray-800">Rp. 28,600,000</div>
                             </div>
                             <div class="col-auto">
                                 <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Earnings (Monthly) Card Example -->
             <div class="col-xl-3 col-md-6 mb-4">
                 <div class="card border-left-info shadow h-100 py-2">
                     <div class="card-body">
                         <div class="row no-gutters align-items-center">
                             <div class="col ml-2">
                                 <div class="text-l font-weight-bold text-danger text-uppercase mb-1">SISA KAS
                                 </div>
                                 <div class="row no-gutters align-items-center">
                                     <div class="col ml-2">
                                         <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800">Rp. 50,000</div>
                                     </div>

                                 </div>
                             </div>
                             <div class="col-auto">
                                 <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Pending Requests Card Example -->
             <div class="col-xl-3 col-md-6 mb-4">
                 <div class="card border-left-warning shadow h-100 py-2">
                     <div class="card-body">
                         <div class="row no-gutters align-items-center">
                             <div class="col ml-2">
                                 <div class="text-l font-weight-bold text-info  text-uppercase mb-1">
                                     Jumlah PO Tercetak</div>
                                 <div class="h5 mb-0 font-weight-bold text-gray-800">18</div>
                             </div>
                             <div class="col-auto">
                                 <i class="fas fa-comments fa-2x text-gray-300"></i>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>

         <!-- Content Row -->

         <div class="row">

             <!-- Area Chart -->
             <div class="col-xl-8 col-lg-7">
                 <div class="card shadow mb-4">
                     <!-- Card Header - Dropdown -->
                     <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                         <h6 class="m-0 font-weight-bold text-primary">Mutasi Pemesanan Produk</h6>
                         <div class="dropdown no-arrow">
                             <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                             </a>
                             <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                 <div class="dropdown-header">Dropdown Header:</div>
                                 <a class="dropdown-item" href="#">Action</a>
                                 <a class="dropdown-item" href="#">Another action</a>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item" href="#">Something else here</a>
                             </div>
                         </div>
                     </div>
                     <!-- Card Body -->
                     <div class="card-body">
                         <div class="chart-area">
                             <canvas id="myAreaChart"></canvas>
                         </div>
                     </div>
                 </div>
             </div>

             <!-- Pie Chart -->
             <div class="col-xl-4 col-lg-5">
                 <div class="card shadow mb-4">
                     <!-- Card Header - Dropdown -->
                     <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                         <h6 class="m-0 font-weight-bold text-primary">Daftar Transaksi</h6>
                         <div class="dropdown no-arrow">
                             <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                             </a>
                             <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                                 <div class="dropdown-header">Dropdown Header:</div>
                                 <a class="dropdown-item" href="#">Action</a>
                                 <a class="dropdown-item" href="#">Another action</a>
                                 <div class="dropdown-divider"></div>
                                 <a class="dropdown-item" href="#">Something else here</a>
                             </div>
                         </div>
                     </div>
                     <!-- Card Body -->
                     <div class="card-body">
                         <div class="chart-pie pt-4 pb-2">
                             <canvas id="myPieChart"></canvas>
                         </div>
                         <div class="mt-4 text-center small">
                             <span class="mr-2">
                                 <i class="fas fa-circle text-primary"></i> Transfer
                             </span>
                             <span class="mr-2">
                                 <i class="fas fa-circle text-success"></i> Cash
                             </span>
                             <span class="mr-2">
                                 <i class="fas fa-circle text-danger"></i> Piutang
                             </span>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     <?php
        } else if ($_SESSION['level'] == 2) {
        ?>
         <div class="container-mt-5">
             <div class="row">

                 <!-- Earnings (Monthly) Card Example -->
                 <div class="col-xl-3 col-md-6 mb-4 mr-5">
                     <div class="card" style="width: 18rem;">
                         <div class="card-body">
                             <h5 class="card-title">Produk Digital Print</h5>
                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                             <a href="#" class="btn btn-primary"><i class="fa fa-search mr-2"></i>Telusuri</a>
                         </div>
                     </div>
                 </div>

                 <!-- Earnings (Monthly) Card Example -->
                 <div class="col-xl-3 col-md-1 mb-4 mr-5">
                     <div class="card" style="width: 18rem;">
                         <div class="card-body">
                             <h5 class="card-title">Produk Docu Print</h5>
                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                             <a href="#" class="btn btn-primary"><i class="fa fa-search mr-2"></i>Telusuri</a>
                         </div>
                     </div>
                 </div>

                 <!-- Earnings (Monthly) Card Example -->
                 <div class="col-xl-3 col-md-6 mb-4 mr-5">
                     <div class="card" style="width: 18rem;">
                         <div class="card-body">
                             <h5 class="card-title">Produk Stempel</h5>
                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                             <a href="#" class="btn btn-primary"><i class="fa fa-search mr-2"></i>Telusuri</a>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="row">
             <div class="col-xl-3 col-md-6 mb-4 mr-5">
                     <div class="card" style="width: 18rem;">
                         <div class="card-body">
                             <h5 class="card-title">Produk Undangan</h5>
                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                             <a href="#" class="btn btn-primary"><i class="fa fa-search mr-2"></i>Telusuri</a>
                         </div>
                     </div>
                 </div>
             <div class="col-xl-3 col-md-6 mb-4 mr-5">
                     <div class="card" style="width: 18rem;">
                         <div class="card-body">
                             <h5 class="card-title">Stiker Cutting</h5>
                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                             <a href="#" class="btn btn-primary"><i class="fa fa-search mr-2"></i>Telusuri</a>
                         </div>
                     </div>
                 </div>
                 <div class="col-xl-3 col-md-6 mb-4 mr-5">
                     <div class="card" style="width: 18rem;">
                         <div class="card-body">
                             <h5 class="card-title">Ongkos Potong & Finishing</h5>
                             <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                             <a href="#" class="btn btn-primary"><i class="fa fa-search mr-2"></i>Telusuri</a>
                         </div>
                     </div>
                 </div>
             </div>
                 <!-- Pending Requests Card Example -->
               


         </div>
 </div>
 <!-- /.container-fluid -->

 </div>
 <!-- End of Main Content --> <?php
                            }
                                ?>