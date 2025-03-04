<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Full secure and faster POS of Intriguetheater" name="description">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/frontend-assets/images/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/frontend-assets/images/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/frontend-assets/images/favicon_io/favicon-16x16.png') }}">
    <link rel="manifest" href="{{ asset('public/frontend-assets/images/favicon_io/site.webmanifest') }}">

    <!-- Page title -->
    <title>@yield('title','OBS')</title>

    <!-- Plugins css -->
    <link href="{{ asset('public/admin-assets/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />

    <!-- App css -->
    <link href="{{ asset('public/admin-assets/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/admin-assets/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/admin-assets/assets/css/app.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/frontend-assets/css/style.css') }}" rel="stylesheet" type="text/css">

    @stack('styles')
</head>
<body>

<!-- Begin Wrapper -->
<div id="wrapperd">
    <!-- Navbar / Top Bar -->
    @section('nav-bar')
        @include('layouts/frontend/components/navbar')
    @show

    @yield('content')

    @section('footer')
    <footer class="site-footer footer-area">
        <div class="container">
            <div class="copyright">
                Copyright &copy; <a href="" target="_blank">Eden Capital</a>
            </div>
        </div>
    </footer>
    @show

</div>
<!-- END wrapper -->

<!-- Right Sidebar -->
@section('right-sidebar')

@show

<!-- Modals -->
@section('modals')

@show

<!-- Right bar overlay-->
<div class="rightbar-overlay"></div>

<!-- Vendor js -->
<script src="{{ asset('public/admin-assets/assets/js/vendor.min.js') }}"></script>

 <!-- Plugins js-->
 {{-- <script src="{{ asset('public/admin-assets/assets/libs/flatpickr/flatpickr.min.js') }}"></script> --}}
 <script src="{{ asset('public/admin-assets/assets/libs/jquery-knob/jquery.knob.min.js') }}"></script>
 <script src="{{ asset('public/admin-assets/assets/libs/jquery-sparkline/jquery.sparkline.min.js') }}"></script>
 <script src="{{ asset('public/admin-assets/assets/libs/flot-charts/jquery.flot.js') }}"></script>
 <script src="{{ asset('public/admin-assets/assets/libs/flot-charts/jquery.flot.time.js') }}"></script>
 <script src="{{ asset('public/admin-assets/assets/libs/flot-charts/jquery.flot.tooltip.min.js') }}"></script>
 <script src="{{ asset('public/admin-assets/assets/libs/flot-charts/jquery.flot.selection.js') }}"></script>
 <script src="{{ asset('public/admin-assets/assets/libs/flot-charts/jquery.flot.crosshair.js') }}"></script>

<!-- Dashboar 1 init js-->
<script src="{{ asset('public/admin-assets/assets/js/pages/dashboard-1.init.js') }}"></script>
  <!-- App js-->
<script src="{{ asset('public/admin-assets/assets/js/app.min.js') }}"></script>

@stack('scripts')
</body>
</html>
