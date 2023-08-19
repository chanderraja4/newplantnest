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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
    <link href="{{ asset('backend/assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('backend/assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <link id="pagestyle" href="{{ asset('backend/assets/css/material-dashboard.css?v=3.0.4') }}" rel="stylesheet" />
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