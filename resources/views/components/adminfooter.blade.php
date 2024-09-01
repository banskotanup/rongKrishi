<footer class="footer">
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Copyright © 2021.  Premium <a href="/admin/https://www.bootstrapdash.com/" target="_blank">Bootstrap admin template</a> from BootstrapDash. All rights reserved.</span>
            <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center">Hand-crafted & made with <i class="ti-heart text-danger ml-1"></i></span>
          </div>
          <div class="d-sm-flex justify-content-center justify-content-sm-between">
            <span class="text-muted text-center text-sm-left d-block d-sm-inline-block">Distributed by <a href="/admin/https://www.themewagon.com/" target="_blank">Themewagon</a></span> 
          </div>
        </footer> 
        <!-- partial -->
      </div>
      <!-- main-panel ends -->
    </div>   
    <!-- page-body-wrapper ends -->
  </div>
  <!-- container-scroller -->

  <!-- plugins:js -->
  <script src="/admin/vendors/js/vendor.bundle.base.js"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="/admin/vendors/chart.js/Chart.min.js"></script>
  <script src="/admin/vendors/datatables.net/jquery.dataTables.js"></script>
  <script src="/admin/vendors/datatables.net-bs4/dataTables.bootstrap4.js"></script>
  <script src="/admin/js/dataTables.select.min.js"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="/admin/js/off-canvas.js"></script>
  <script src="/admin/js/hoverable-collapse.js"></script>
  <script src="/admin/js/template.js"></script>
  <script src="/admin/js/settings.js"></script>
  <script src="/admin/js/todolist.js"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="/admin/js/dashboard.js"></script>
  <script src="/admin/js/Chart.roundedBarCharts.js"></script>
  <!-- End custom js for this page-->
 
  <script type="text/javascript">
                function confirmation(ev) { 
                  ev.preventDefault(); 
                  var urlToRedirect = ev.currentTarget.getAttribute('href'); 
                  console.log(urlToRedirect); 
                swal({ 
                title: "Are you sure to Delete this", 
                text: "You will not be able to revert this!", 
                icon: "warning",
                buttons: true, 
                dangerMode: true, 
                })
              .then((willCancel) => { 
                if (willCancel) { 
                  window.location.href= urlToRedirect; 
                }
              });
            }
        </script>

</body>

</html>

