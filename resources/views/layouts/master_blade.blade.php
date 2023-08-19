<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Male_Fashion Template">
    <meta name="keywords" content="Male_Fashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Green World | White Developers</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@300;400;600;700;800;900&display=swap"
    rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bs5/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.2.1/css/fontawesome.min.css" integrity="sha384-QYIZto+st3yW+o8+5OHfT6S482Zsvz2WfOzpFSXMF9zqeLcFV0/wlZpMtyFcZALm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/bootstrap.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/font-awesome.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/elegant-icons.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/magnific-popup.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/nice-select.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/owl.carousel.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/slicknav.min.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/style.css') }}" type="text/css">
</head>

<body>

    @include('layouts.body.header')
    {{-- @include('layouts.body.slider') --}}


    <main id="main">
        @yield('home_master')
    </main><!-- End #main -->
  
@include('layouts.body.footer')

    <!-- Js Plugins -->
    <script src=" {{ asset('frontend/assets/js/bs5/js/bootstrap.bundle.js') }}"></script>
    <script src=" {{ asset('frontend/assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src=" {{ asset('frontend/assets/js/bootstrap.min.js') }}"></script>
    <script src=" {{ asset('frontend/assets/js/jquery.nice-select.min.js') }}"></script>
    <script src=" {{ asset('frontend/assets/js/jquery.nicescroll.min.js') }}"></script>
    <script src=" {{ asset('frontend/assets/js/jquery.magnific-popup.min.js') }}"></script>
    <script src=" {{ asset('frontend/assets/js/jquery.countdown.min.js') }}"></script>
    <script src=" {{ asset('frontend/assets/js/jquery.slicknav.js') }}"></script>
    <script src=" {{ asset('frontend/assets/js/mixitup.min.js') }}"></script>
    <script src=" {{ asset('frontend/assets/js/owl.carousel.min.js') }}"></script>
    <script src=" {{ asset('frontend/assets/js/main.js') }}"></script>
</body>

</html>