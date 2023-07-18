<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tech Briva</title>

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="front-template/assets/images/favicon.svg" type="image/svg" />

    <!-- ===== All CSS files ===== -->
    <link rel="stylesheet" href="{{ asset('front-template/assets/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('front-template/assets/css/animate.css')}}" />
    <link rel="stylesheet" href="{{ asset('front-template/assets/css/glightbox.min.css')}}" />
    <link rel="stylesheet" href="{{ asset('front-template/assets/css/lineicons.css')}}" />
    <link rel="stylesheet" href="{{ asset('front-template/assets/css/styles.css')}}" />
    <link rel="stylesheet" href="{{ asset('front-template/assets/css/about.css')}}" />
    
</head>

<body>
    <!-- ====== Header Start ====== -->
    @include('layouts.partials._header')
    <!-- ====== Header End ====== -->

    @yield('front-content')

    <!-- ====== Footer Start ====== -->
    @include('layouts.partials._footer')
    <!-- ====== Footer End ====== -->

    <!-- ====== Back To Top Start ====== -->
    <a href="javascript:void(0)" class="back-to-top">
        <i class="lni lni-chevron-up"> </i>
    </a>
    <!-- ====== Back To Top End ====== -->

    <!-- ====== All Javascript Files ====== -->
    <script src="front-template/assets/js/bootstrap.bundle.min.js"></script>
    <script src="front-template/assets/js/wow.min.js"></script>
    <script src="front-template/assets/js/glightbox.min.js"></script>
    <script src="front-template/assets/js/main.js"></script>
</body>

</html>
