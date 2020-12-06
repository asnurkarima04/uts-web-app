@extends('tema.master')
@section('content')

<header class="masthead">
    <div class="container">
        <p class="breadcrumbs"><span class="mr-2"><a href="/home" class="text-light text-decoration-none">Home <i class="fa fa-chevron-right"></i></a></span> <span>Course List<i class="fa fa-chevron-right"></i></span></p>
        <div class="masthead-heading text-uppercase ">course Lists</div>
    </div>
</header>
<section class="page-section bg-light" id="portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('style/assets/img/course/work-1.jpg')}}" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Java</div>
                        <div class="portfolio-caption-subheading text-muted">Memulai Pemrograman dengan Java</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('style/assets/img/course/work-2.jpg')}}" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Python</div>
                        <div class="portfolio-caption-subheading text-muted">Memulai Pemrograman dengan Python</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('style/assets/img/course/work-3.jpg')}}" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Kotlin</div>
                        <div class="portfolio-caption-subheading text-muted">Memulai Pemrograman dengan Kotlin</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-lg-0">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('style/assets/img/course/work-4.jpg')}}" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Android</div>
                        <div class="portfolio-caption-subheading text-muted">Belajar Fundamental Aplikasi Android</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 mb-4 mb-sm-0">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('style/assets/img/course/work-5.jpg')}}" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">IOS</div>
                        <div class="portfolio-caption-subheading text-muted">Belajar Fundamental Aplikasi IOS</div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="portfolio-item">
                    <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
                        <div class="portfolio-hover">
                            <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="{{ asset('style/assets/img/course/work-6.jpg')}}" alt="" />
                    </a>
                    <div class="portfolio-caption">
                        <div class="portfolio-caption-heading">Web</div>
                        <div class="portfolio-caption-subheading text-muted">Belajar Fundamental Front-End</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Modals-->
<!-- Modal 1-->
<div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="{{ asset('style/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Java</h2>
                            <p class="item-intro text-muted">Memulai pemrograman dengan java.</p>
                            <img class="img-fluid d-block mx-auto" src="{{ asset('style/assets/img/course/work-1.jpg')}}" alt="" />
                            <p>Belajar bahasa Java buat kamu yang ingin mempelajari konsep Pemrograman Berorientasi Objek (PBO) terpopuler untuk mengembangkan aplikasi.</p>
                            <ul class=" list-inline">
                                <li>Time: 40 Hours</li>
                                <li>Module: 40 Page</li>
                                <li>Category: Beginner</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times mr-1"></i>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 2-->
<div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="{{ asset('style/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Python</h2>
                            <p class="item-intro text-muted">Memulai Pemrograman dengan Python.</p>
                            <img class="img-fluid d-block mx-auto" src="{{ asset('style/assets/img/course/work-2.jpg')}}" alt="" />
                            <p>Belajar Python yang menjadi landasan penting berbagai tren industri seperti ilmu data, pemelajaran mesin, dan manajemen infrastruktur.</p>
                            <ul class="list-inline">
                                <li>Time: 40 Hours</li>
                                <li>Module: 30 Page</li>
                                <li>Category: Beginner</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times mr-1"></i>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 3-->
<div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="{{ asset('style/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Kotlin</h2>
                            <p class="item-intro text-muted">Memulai Pemrograman dengan Python.</p>
                            <img class="img-fluid d-block mx-auto" src="{{ asset('style/assets/img/course/work-3.jpg')}}" alt="" />
                            <p>Kelas pengantar untuk mempelajari Functional Programming serta Object-Oriented Programming (OOP) menggunakan Kotlin.</p>
                            <ul class="list-inline">
                                <li>Time: 40 Hours</li>
                                <li>Module: 114 Page</li>
                                <li>Category: Beginner</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times mr-1"></i>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 4-->
<div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="{{ asset('style/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">Android</h2>
                            <p class="item-intro text-muted">Belajar Fundamental Aplikasi Android.</p>
                            <img class="img-fluid d-block mx-auto" src="{{ asset('style/assets/img/course/work-4.jpg')}}" alt="" />
                            <p>Pelajari skill Android dengan kurikulum terlengkap yang dibutuhkan oleh perusahaan. Mulai dari design pattern, testing, API sampai database.</p>
                            <ul class="list-inline">
                                <li>Time: 140 Hours</li>
                                <li>Module: 145 Page</li>
                                <li>Category: Expert</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times mr-1"></i>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 5-->
<div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="{{ asset('style/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <div class="modal-body">
                            <!-- Project Details Go Here-->
                            <h2 class="text-uppercase">IOS</h2>
                            <p class="item-intro text-muted">Belajar Fundamental Aplikasi IOS.</p>
                            <img class="img-fluid d-block mx-auto" src="{{ asset('style/assets/img/course/work-5.jpg')}}" alt="" />
                            <p>Pelajari komponen fundamental iOS berdasarkan teknik yang digunakan industri mulai dari App Design, SwiftUI, Networking, sampai Database.</p>
                            <ul class="list-inline">
                                <li>Time: 70 Hours</li>
                                <li>Module: 140 Page</li>
                                <li>Category: Expert</li>
                            </ul>
                            <button class="btn btn-primary" data-dismiss="modal" type="button">
                                <i class="fas fa-times mr-1"></i>
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Modal 6-->
<div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="close-modal" data-dismiss="modal"><img src="{{ asset('style/assets/img/close-icon.svg')}}" alt="Close modal" /></div>
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <!-- Project Details Go Here-->
                        <h2 class="text-uppercase">WEB</h2>
                        <p class="item-intro text-muted">Belajar Fundamental Front-End.</p>
                        <img class="img-fluid d-block mx-auto" src="{{ asset('style/assets/img/course/work-6.jpg')}}" alt="" />
                        <p>Pelajari sintaks ES6, Web Component, dan Build Tools dalam membangun website dengan teknik yang simple, reusable, dan optimized.</p>
                        <ul class="list-inline">
                            <li>Time: 70 Hours</li>
                            <li>Module: 133 Page</li>
                            <li>Category: Expert</li>
                        </ul>
                        <button class="btn btn-primary" data-dismiss="modal" type="button">
                            <i class="fas fa-times mr-1"></i>
                            Close
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection