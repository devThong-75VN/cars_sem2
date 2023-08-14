<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ url('assets/vendors/mdi/css/materialdesignicons.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/vendors/css/vendor.bundle.base.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" />
    <link rel="stylesheet" href="{{ url('assets/css/style.css')}}" />
    <link rel="shortcut icon" href="{{ url('assets/images/favicon.png') }}" />
</head>

<body>
    <div class="container-scroller">
        @include('admin.inc.sidebar')
        <div class="container-fluid page-body-wrapper">
            @include('admin.inc.settingpanel')

            @include('admin.inc.navbar')
            @yield('content')
        </div>

    </div>

    @include('admin.inc.footer')
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ url('assets/vendors/js/vendor.bundle.base.js')}}"></script>
    <!-- Plugin js for this page -->
    <script src="{{ url('assets/vendors/chart.js/Chart.min.js')}}"></script>
    <script src="{{ url('assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.js')}}"></script>
    <script src="{{ url('assets/vendors/flot/jquery.flot.js')}}"></script>
    <script src="{{ url('assets/vendors/flot/jquery.flot.resize.js')}}"></script>
    <script src="{{ url('assets/vendors/flot/jquery.flot.categories.js')}}"></script>
    <script src="{{ url('assets/vendors/flot/jquery.flot.fillbetween.js')}}"></script>
    <script src="{{ url('assets/vendors/flot/jquery.flot.stack.js')}}"></script>
    <script src="{{ url('assets/vendors/flot/jquery.flot.pie.js')}}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ url('assets/js/off-canvas.js')}}"></script>
    <script src="{{ url('assets/js/hoverable-collapse.js')}}"></script>
    <script src="{{ url('assets/js/misc.js')}}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ url('assets/js/dashboard.js')}}"></script>
    <!-- End custom js for this page -->
</body>


</html>