<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{asset('public/Backend/css/themify-icons.css')}}">
    <link rel="stylesheet" href="{{asset('public/Backend/css/vendor.bundle.base.css')}}">
    <link rel="stylesheet" href="{{asset('public/Backend/css/vendor.bundle.addons.css')}}">
    <!-- endinject -->
    <!-- plugin css for this page -->

    <!-- End plugin css for this page -->

    <!-- inject:css -->
    <link rel="stylesheet" href="{{asset('public/Backend/css/style.css')}}">
    <!-- endinject -->
    <link rel="shortcut icon" href="{{asset('public/Backend/images/logo_2H_tech.png')}}" >
</head>
<body>
<div class="container-scroller">
<!-- nav bar -->
@include('admin.include.NavAdmin')

<div class="container-fluid page-body-wrapper">
    <!--Sidebar-->
    @include('admin.include.NavbarAdmin')

<!--main part which is change -->
    <div class="main-panel">
        <div class="content-wrapper">
        @yield('status')
@yield('content')

<!--footer -->
    @include('admin.include.footer')
        </div>
    </div>


</div>
</div>
<!-- plugins:js -->
<script src="{{asset('public/Backend/js/vendor.bundle.base.js')}}"></script>
<script src="{{asset('public/Backend/js/vendor.bundle.addons.js')}}"></script>
<!-- endinject -->
<!-- Plugin js for this page-->
<!-- End plugin js for this page-->
<!-- inject:js -->
<script src="{{asset('public/Backend/js/off-canvas.js')}}"></script>
<script src="{{asset('public/Backend/js/hoverable-collapse.js')}}"></script>
<script src="{{asset('public/Backend/js/template.js')}}"></script>
<script src="{{asset('public/Backend/js/settings.js')}}"></script>
<script src="{{asset('public/Backend/js/todolist.js')}}"></script>
<!-- endinject -->
<!-- Custom js for this page-->
<script src="{{asset('public/Backend/js/dashboard.js')}}"></script>
<!-- End custom js for this page-->
@yield('script')

</body>

</html>
