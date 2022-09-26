 <!-- Footer -->
 <footer class="sticky-footer bg-white">
     <div class="container my-auto">
         <div class="copyright text-center my-auto">
             <span>Copyright 2022 &copy; Nadhif Ali Ikhsani</span>
         </div>
     </div>
 </footer>
 <!-- End of Footer -->

 </div>
 <!-- End of Content Wrapper -->

 </div>
 <!-- End of Page Wrapper -->

 <!-- Scroll to Top Button-->
 <a class="scroll-to-top rounded" href="#page-top">
     <i class="fas fa-angle-up"></i>
 </a>
 <div class="modal fade" id="aboutMe" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Asia Visual ERP V.1.5.0</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">
                 <table class="table table-stripped">
                    <thead></thead>
                     <tr>
                         <td>Name Product</td>
                         <td>:</td>
                         <td>Asia Visual ERP</td>
                     </tr>
                     <tr>
                         <td>Version Date</td>
                         <td>:</td>
                         <td>1.5.0</td>
                     </tr>
                     <tr>
                         <td>Build Environment</td>
                         <td>:</td>
                         <td>ERP-AVG-2023</td>
                     </tr>
                     <tr>
                         <td>License Number</td>
                         <td>:</td>
                         <td>AVG89692411115</td>
                     </tr>
                     <tr>
                         <td>Web Programmer</td>
                         <td>:</td>
                         <td>Nadhif Ali Ikhsani</td>
                     </tr>
                     </tr>
                 </table>
                
             </div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
             </div>
         </div>
     </div>
 </div>

 <!-- Logout Modal-->
 <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
         <div class="modal-content">
             <div class="modal-header">
                 <h5 class="modal-title" id="exampleModalLabel">Yakin Keluar?</h5>
                 <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                     <span aria-hidden="true">×</span>
                 </button>
             </div>
             <div class="modal-body">Pastikan kerjaanmu sudah tuntas dan kelar ya jangan lupa ucap Alhamdulillah...</div>
             <div class="modal-footer">
                 <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                 <a class="btn btn-danger" href="<?= BASE_URL; ?>/Login/logout">Keluar</a>
             </div>
         </div>
     </div>
 </div>

 <!-- Bootstrap core JavaScript-->

 <!-- Bootstrap core JavaScript-->
 <!-- Bootstrap core JavaScript-->




 <!-- Core plugin JavaScript-->

 <!-- Page level plugins -->
 
 <script src="<?= BASE_URL ?>/vendor/jquery/jquery.min.js"></script>
 <script src="<?= BASE_URL ?>/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
 <script src="<?= BASE_URL ?>/js/sb-admin-2.min.js"></script>
 <script src="<?= BASE_URL_JS ?>"></script>
 <script src="<?= DATA_TABLES_JQUERY ?>"></script>
  <script src="<?= DATA_TABLES ?>"></script>
 <script src="<?= DATA_TABLES_CSS ?>"></script>
 <script src="<?= BASE_URL ?>/js/pagination.js"></script>

 <!-- Core plugin JavaScript-->
 <script src="<?= BASE_URL ?>/vendor/jquery-easing/jquery.easing.min.js"></script>

 <!-- Custom scripts for all pages-->

<!-- Custom scripts for all pages-->

 <!-- Page level plugins -->

 <!-- Page level custom scripts -->
 <!-- Core plugin JavaScript-->

 <!-- Custom scripts for all pages-->


 <!-- Page level plugins -->
 <script type="text/javascript">
     $(document).ready(function() {
         $('#tableData').DataTable();
     });
     window.onload = function() {
         jam();
     }

     function jam() {
         var e = document.getElementById('jam'),
             d = new Date(),
             h, m, s;
         h = d.getHours();
         m = set(d.getMinutes());
         s = set(d.getSeconds());

         e.innerHTML = h + ':' + m + ':' + s;

         setTimeout('jam()', 1000);
     }

     function set(e) {
         e = e < 10 ? '0' + e : e;
         return e;
     }
     
 </script>
 <!-- Page level custom scripts -->
 <script src="<?= BASE_URL_JS; ?>"></script>
 <script src="<?= BASE_URL; ?>/js/script.js"></script>

 </body>

 </html>