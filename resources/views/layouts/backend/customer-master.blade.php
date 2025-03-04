<!doctype html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Full secure and faster OBS-Online Banking system" name="description">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    
    <!-- App favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('public/frontend-assets/images/favicon_io/apple-touch-icon.png') }}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('public/frontend-assets/images/favicon_io/favicon-32x32.png') }}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('public/frontend-assets/images/favicon_io/favicon-16x16.png') }}">
    {{-- <link rel="manifest" href="{{ asset('public/frontend-assets/images/favicon_io/site.webmanifest') }}"> --}}

    <!-- Page title -->
    <title>@yield('title','ড্যাশবোর্ড')</title>
    

    <!-- Plugins css -->
    <link href="{{ asset('public/admin-assets/assets/libs/flatpickr/flatpickr.min.css') }}" rel="stylesheet" type="text/css" />
    @stack('styles')
    <!-- App css -->
    <link href="{{ asset('public/admin-assets/assets/css/bootstrap.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/admin-assets/assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link href="{{ asset('public/admin-assets/assets/css/app.min.css') }}" rel="stylesheet" type="text/css">

</head>
<body>

<!-- Begin Wrapper -->
<div id="wrapper">

    <!-- Left Sidebar -->
    @section('left-sidebar')
        @include('layouts/backend/components/customerSidebar')
    @show

    <div class="content-page">

        <div class="content">
            @section('alert')
                {{-- @include('layouts/backend/components/alert') --}}
            @show

            @yield('content')
                

        </div>
        
        <!-- Footer Start -->
            @section('footer')
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6">
                                 <?php echo date('Y');?> © Eden Capital
                            </div>
                            <div class="col-md-6">
                                <div class="text-md-right footer-links d-none d-sm-block">
                                    {{-- <a href="javascript:void(0);">About Us</a> <a href="javascript:void(0);">Help</a> <a href="javascript:void(0);">Contact Us</a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </footer>
            @show
        <!-- end Footer -->

    </div>

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
 @stack('plugins')

<!-- Dashboar 1 init js-->
<script src="{{ asset('public/admin-assets/assets/js/pages/dashboard-1.init.js') }}"></script>
  <!-- App js-->
<script src="{{ asset('public/admin-assets/assets/js/app.min.js') }}"></script>

@stack('scripts')


</body>
</html>
