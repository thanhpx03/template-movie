<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="stylesheet" href=" {{asset('client/assets/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('client/assets/css/all.min.css') }}">
    <link rel="stylesheet" href=" {{asset('client/assets/css/animate.css') }}">
    <link rel="stylesheet" href=" {{asset('client/assets/css/flaticon.css')}}">
    <link rel="stylesheet" href=" {{asset('client/assets/css/magnific-popup.css')}}">
    <link rel="stylesheet" href=" {{asset('client/assets/css/odometer.css')}}">
    <link rel="stylesheet" href=" {{asset('client/assets/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href=" {{asset('client/assets/css/nice-select.css')}}">
    <link rel="stylesheet" href=" {{asset('client/assets/css/jquery.animatedheadline.css')}}">
    <link rel="stylesheet" href="{{asset('client/assets/css/main.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="shortcut icon" href=" {{asset('client/assets/images/favicon.png')}}" type="image/x-icon">

    <title>Boleto  - Online Ticket Booking Website HTML Template</title>

    @stack('styles')


</head>

<body>
    <!-- header -->
    @include('layouts.client.header')
  <!-- end-header -->

    <!-- ==========Banner-Section========== -->
    <section class="banner-section">
        <div class="banner-bg bg_img bg-fixed" data-background=" {{asset('client/assets/images/banner/banner01.jpg')}}"></div>
        <div class="container">
            <div class="banner-content">
                <h1 class="title  cd-headline clip"><span class="d-block">book your</span> tickets for 
                    <span class="color-theme cd-words-wrapper p-0 m-0">
                        <b class="is-visible">Movie</b>
                        <b>Event</b>
                        <b>Sport</b>
                    </span>
                </h1>
                <p>Safe, secure, reliable ticketing.Your ticket to live entertainment!</p>
            </div>
        </div>
    </section>
    <!-- ==========Banner-Section========== -->

    <!-- ==========Ticket-Search========== -->
    @include('layouts.client.ticket')
   >    
    <!-- ==========Ticket-Search========== -->

    <!-- ==========Movie-Section========== -->
    @include('layouts.client.movie')
  
    <!-- ==========Movie-Section========== -->

    <!-- ==========Event-Section========== -->
    @include('layouts.client.event')
  
    <!-- ==========Event-Section========== -->

    <!-- ==========Sports-Section========== -->
    @include('layouts.client.sports')

    <!-- ==========Sports-Section========== -->

    <!-- ==========Newslater-Section========== -->
    @include('layouts.client.footer')
   
    <!-- ==========Newslater-Section========== -->


    <script src="  {{asset('client/assets/js/jquery-3.3.1.min.js')}}"></script>
    <script src=" {{asset('client/assets/js/modernizr-3.6.0.min.js')}}"></script>
    <script src=" {{asset('client/assets/js/plugins.js')}}"  ></script>
    <script src=" {{asset('client/assets/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('client/assets/js/heandline.js ')}}"></script>
    <script src=" {{asset('client/assets/js/isotope.pkgd.min.js')}}"></script>
    <script src=" {{asset('client/assets/js/magnific-popup.min.js')}}"></script>
    <script src="{{asset('client/assets/js/owl.carousel.min.js ')}}"></script>
    <script src=" {{asset('client/assets/js/wow.min.js')}}"></script>
    <script src=" {{asset('client/assets/js/countdown.min.js')}}"></script>
    <script src=" {{asset('client/assets/js/odometer.min.js')}}"></script>
    <script src=" {{asset('client/assets/js/viewport.jquery.js')}}"></script>
    <script src=" {{asset('client/assets/js/nice-select.js')}}"></script>
    <script src=" {{asset('client/assets/js/main.js')}}"></script>
@stack('scripts')

</body>

</html>