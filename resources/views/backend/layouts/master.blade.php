<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Star Admin Free Bootstrap-4 Admin Dashboard Template</title>
  <!-- plugins:css -->
  <link rel="stylesheet" href="backend/node_modules/mdi/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="backend/node_modules/simple-line-icons/css/simple-line-icons.css">
  <!-- endinject -->
  <!-- plugin css for this page -->
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="backend/css/style.css">
  <!-- endinject -->
  <link rel="shortcut icon" href="backend/images/favicon.png" />
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('backend.layouts.topbar')
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('backend.layouts.leftbar')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
         @yield('content') 
       </div>
       <!-- content-wrapper ends -->
       <!-- partial:partials/_footer.html -->
       @include('backend.layouts.footer')
       <!-- partial -->
     </div>
     <!-- main-panel ends -->
   </div>
   <!-- page-body-wrapper ends -->
 </div>
 <!-- container-scroller -->

 <!-- plugins:js -->
 <script src="backend/node_modules/jquery/dist/jquery.min.js"></script>
 <script src="backend/node_modules/popper.js/dist/umd/popper.min.js"></script>
 <script src="backend/node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
 <!-- endinject -->
 <!-- Plugin js for this page-->
 <script src="backend/node_modules/chart.js/dist/Chart.min.js"></script>
 <!-- End plugin js for this page-->
 <!-- inject:js -->
 <script src="backend/js/off-canvas.js"></script>
 <script src="backend/js/misc.js"></script>
 <!-- endinject -->
 <!-- Custom js for this page-->
 <script src="backend/js/dashboard.js"></script>
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB5NXz9eVnyJOA81wimI8WYE08kW_JMe8g&callback=initMap" async defer></script>
 <script src="backend/js/maps.js"></script>
 <!-- End custom js for this page-->
</body>

</html>