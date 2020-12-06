<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Study AR</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('style/assets/img/icon.png')}}" />
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('style/css/styles.css')}}" rel="stylesheet" />
</head>

<body id="page-top">

    @include('tema.navigasi')
    @yield('content')

    <!-- Bootstrap core JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- Third party plugin JS-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
    <!-- Contact form JS-->
    <script src="{{ asset('style/assets/mail/jqBootstrapValidation.js')}}"></script>
    <script src="{{ asset('style/assets/mail/contact_me.js')}}"></script>
    <!-- Core theme JS-->
    <script src="{{ asset('style/js/scripts.js')}}"></script>

</body>

<footer class="footer py-4 bg-dark">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-4 text-lg-left text-warning">Copyright © AsnurRizky 2020</div>
            <div class="col-lg-4 my-3 my-lg-0">
                <a class="btn btn-light btn-social mx-2" href="#!"><i class="fab fa-twitter"></i></a>
                <a class="btn btn-light btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                <a class="btn btn-light btn-social mx-2" href="#!"><i class="fab fa-linkedin-in"></i></a>
            </div>
            <div class="col-lg-4 text-lg-right">
                <a class="mr-3" href="#!">Privacy Policy</a>
                <a href="#!">Terms of Use</a>
            </div>
        </div>
    </div>
</footer>

</html>