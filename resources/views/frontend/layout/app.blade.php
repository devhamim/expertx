
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $setting->first()->title }}</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('uploads/setting') }}/{{ $setting->first()->favicon }}">

    <link rel="stylesheet" href="{{ asset('frontend') }}/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/lightgallery.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/bsnav.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/carousel.min.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/style.css">
    <link rel="stylesheet" href="{{ asset('frontend') }}/css/responsive.css">
</head>

<body>

    <!-- ===========================
    =====>> Top Preloader <<===== -->
    <div id="preloader">
        <div class="lds-css">
            <div class="preloader-3">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- =====>> End Top Preloader <<===== 
    =========================== -->

   @include('frontend.layout.header')

    {{-- main start --}}
    @yield('content')
    {{-- main end --}}

    @include('frontend.layout.footer')

    <!-- ===========================
    =====>> Scroll Top <<===== -->
    <a href="#" class="scroll-top show" id="scroll-top">
        <i class="arrow-top fal fa-long-arrow-up"></i>
        <i class="arrow-bottom fal fa-long-arrow-up"></i>
    </a>
    <!-- =====>> End Scroll Top <<===== 
    =========================== -->

    <!-- ===========================
    =====>> Jquery <<===== -->

    <script src="{{ asset('frontend') }}/js/jquery-3.4.1.min.js"></script>
    <script src="{{ asset('frontend') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('frontend') }}/js/plugin.min.js"></script>
    <script src="{{ asset('frontend') }}/js/lightgallery-all.min.js"></script>
    <script src="{{ asset('frontend') }}/js/carousel.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCe2q1gFSd75jKUnTDPq0nZWaMlEu6vL30"></script>
    <script src="{{ asset('frontend') }}/js/bsnav.min.js"></script>
    <script src="{{ asset('frontend') }}/js/roktim.js"></script>

    <!-- =====>> End Jquery <<===== 
    =========================== -->

</body>
</html>