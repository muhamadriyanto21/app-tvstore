<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Dashboard Admin</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <!-- plugins:css -->
  <link rel="stylesheet" href="{{ asset('back/vendors/feather/feather.css') }}">
  <link rel="stylesheet" href="{{ asset('back//vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" href="{{ asset('back/vendors/css/vendor.bundle.base.css') }}">
  <!-- endinject -->
  <!-- Plugin css for this page -->
  <link rel="stylesheet" href="{{ asset('back/vendors/datatables.net-bs4/dataTables.bootstrap4.css') }}">
  <link rel="stylesheet" href="{{ asset('back/vendors/ti-icons/css/themify-icons.css') }}">
  <link rel="stylesheet" type="{{ asset('text/css" href="back/js/select.dataTables.min.css') }}">
  <!-- End plugin css for this page -->
  <!-- inject:css -->
  <link rel="stylesheet" href="{{ asset('back/css/vertical-layout-light/style.css') }}">
  <!-- endinject -->
  <link rel="shortcut icon" href="{{ asset('back/images/favicon.png') }}" />

</head>
<body>

    @include('layouts.back.navbar')




    <div class="container-scroller">
        @yield('content')
    </div>

    @include('layouts.back.footer')

  <!-- plugins:js -->
  <script src="{{ asset('back/vendors/js/vendor.bundle.base.js') }}"></script>
  <!-- endinject -->
  <!-- Plugin js for this page -->
  <script src="{{ asset('back/vendors/chart.js/Chart.min.js') }}"></script>
  <script src="{{ asset('back/vendors/datatables.net/jquery.dataTables.js') }}"></script>
  <script src="{{ asset('back/vendors/datatables.net-bs4/dataTables.bootstrap4.js') }}"></script>
  <script src="{{ asset('back/js/dataTables.select.min.js') }}"></script>

  <!-- End plugin js for this page -->
  <!-- inject:js -->
  <script src="{{ asset('back/js/off-canvas.js') }}"></script>
  <script src="{{ asset('back/js/hoverable-collapse.js') }}"></script>
  <script src="{{ asset('back/js/template.js') }}"></script>
  <script src="{{ asset('back/js/settings.js') }}"></script>
  <script src="{{ asset('back/js/todolist.js') }}"></script>
  <!-- endinject -->
  <!-- Custom js for this page-->
  <script src="{{ asset('back/js/dashboard.js') }}"></script>
  <script src="{{ asset('back/js/Chart.roundedBarCharts.js') }}"></script>
  <!-- End custom js for this page-->
</body>

</html>

