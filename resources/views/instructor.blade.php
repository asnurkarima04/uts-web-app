@extends('tema.master')
@section('content')

<header class="masthead">
    <div class="container">
        <p class="breadcrumbs"><span class="mr-2"><a href="/home" class="text-light text-decoration-none">Home <i class="fa fa-chevron-right"></i></a></span>Instructor <span> <i class="fa fa-chevron-right"></i></span></p>
        <div class="masthead-heading text-uppercase ">instructor</div>
    </div>
</header>
<section class="page-section bg-light" id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{ asset('style/assets/img/instructor/teacher-1.jpg')}}" alt="" />
                    <h4>Bianca Wilson</h4>
                    <p class="text-muted">Business</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{ asset('style/assets/img/instructor/teacher-2.jpg')}}" alt="" />
                    <h4>Larry Parker</h4>
                    <p class="text-muted">Lead Marketer</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{ asset('style/assets/img/instructor/teacher-3.jpg')}}" alt="" />
                    <h4>Diana Petersen</h4>
                    <p class="text-muted">Lead Developer</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{ asset('style/assets/img/instructor/teacher-4.jpg')}}" alt="" />
                    <h4>Mitch Parker</h4>
                    <p class="text-muted">Graphic</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{ asset('style/assets/img/instructor/teacher-5.jpg')}}" alt="" />
                    <h4>Monshe Henderson</h4>
                    <p class="text-muted">Programmer</p>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="team-member">
                    <img class="mx-auto rounded-circle" src="{{ asset('style/assets/img/instructor/teacher-6.jpg')}}" alt="" />
                    <h4>Stella Smith</h4>
                    <p class="text-muted">Developer</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <p class="large text-muted">Mereka adalah pengajar pilihan serta mereka akan membantu kalian saat belajar atau sedang kesusahan menyelesaikan masalah.</p>
            </div>
        </div>
    </div>
</section>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="{{ asset('style/assets/img/logos/envato.jpg')}}" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="{{ asset('style/assets/img/logos/designmodo.jpg')}}" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="{{ asset('style/assets/img/logos/themeforest.jpg')}}" alt="" /></a>
            </div>
            <div class="col-md-3 col-sm-6 my-3">
                <a href="#!"><img class="img-fluid d-block mx-auto" src="{{ asset('style/assets/img/logos/creative-market.jpg')}}" alt="" /></a>
            </div>
        </div>
    </div>
</div>

@endsection