<!DOCTYPE html>
<html lang="en">
<head>
   <title>@yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="public/fronted/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="public/fronted/css/animate.css">

    <link rel="stylesheet" href="public/fronted/css/owl.carousel.min.css">
    <link rel="stylesheet" href="public/fronted/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="public/fronted/css/magnific-popup.css">

    <link rel="stylesheet" href="public/fronted/css/aos.css">

    <link rel="stylesheet" href="public/fronted/css/ionicons.min.css">

    <link rel="stylesheet" href="public/fronted/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="public/fronted/css/jquery.timepicker.css">


    <link rel="stylesheet" href="public/fronted/css/flaticon.css">
    <link rel="stylesheet" href="public/fronted/css/icomoon.css">
    <link rel="stylesheet" href="public/fronted/css/style.css">


</head>
<body class="goto-here">
@include('include.client.nav')

@yield('content')

<section class="ftco-section ftco-no-pt ftco-no-pb py-5 bg-light">
    <div class="container py-4">
        <div class="row d-flex justify-content-center py-5">
            <div class="col-md-6">
                <h2 style="font-size: 22px;" class="mb-0">Subcribe to our Newsletter</h2>
                <span>Get e-mail updates about our latest shops and special offers</span>
            </div>
            <div class="col-md-6 d-flex align-items-center">
                <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control" placeholder="Enter email address">
                        <input type="submit" value="Subscribe" class="submit px-3">
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

@include('include.client.footer')

<script src="public/fronted/js/jquery.min.js"></script>
<script src="public/fronted/js/jquery-migrate-3.0.1.min.js"></script>
<script src="public/fronted/js/popper.min.js"></script>
<script src="public/fronted/js/bootstrap.min.js"></script>
<script src="public/fronted/js/jquery.easing.1.3.js"></script>
<script src="public/fronted/js/jquery.waypoints.min.js"></script>
<script src="public/fronted/js/jquery.stellar.min.js"></script>
<script src="public/fronted/js/owl.carousel.min.js"></script>
<script src="public/fronted/js/jquery.magnific-popup.min.js"></script>
<script src="public/fronted/js/aos.js"></script>
<script src="public/fronted/js/jquery.animateNumber.min.js"></script>
<script src="public/fronted/js/bootstrap-datepicker.js"></script>
<script src="public/fronted/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="public/fronted/js/google-map.js"></script>
<script src="public/fronted/js/main.js"></script>
</body>
</html>
