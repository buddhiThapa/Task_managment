@include('layouts/header')
@include('layouts/sidebar')
@include('layouts/navbar')
<div class="main-panel">
    @yield('section')
    @include('layouts/footer')
</div>
<!-- main-panel ends -->



</div>
<!-- page-body-wrapper ends -->
</div>
<!-- container-scroller -->
<!-- plugins:js -->
<script src="assets/vendors/js/vendor.bundle.base.js"></script>
<!-- endinject -->
<!-- Plugin js for this page -->
<script src="assets/vendors/chart.js/Chart.min.js"></script>
<script src="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js"></script>
<script src="assets/vendors/flot/jquery.flot.js"></script>
<script src="assets/vendors/flot/jquery.flot.resize.js"></script>
<script src="assets/vendors/flot/jquery.flot.categories.js"></script>
<script src="assets/vendors/flot/jquery.flot.fillbetween.js"></script>
<script src="assets/vendors/flot/jquery.flot.stack.js"></script>
<script src="assets/vendors/flot/jquery.flot.pie.js"></script>
<!-- End plugin js for this page -->
<!-- inject:js -->
<script src="assets/js/off-canvas.js"></script>
<script src="assets/js/hoverable-collapse.js"></script>
<script src="assets/js/misc.js"></script>
<!-- endinject -->
<!-- Custom js for this page -->
<script src="assets/js/dashboard.js"></script>
<!-- End custom js for this page -->
<script src="assets/vendors/select2/select2.min.js"></script>
<script src="assets/vendors/typeahead.js/typeahead.bundle.min.js"></script>
<script src="assets/js/file-upload.js"></script>
<script src="assets/js/typeahead.js"></script>
<script src="assets/js/select2.js"></script>

<!-- container-scroller -->
<script src="assets/js/chart.js"></script>
</body>
</html>