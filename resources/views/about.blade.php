@extends('tema.master')
@section('content')

<header class="masthead">
    <div class="container">
        <p class="breadcrumbs"><span class="mr-2"><a href="/home" class="text-light text-decoration-none">Home <i class="fa fa-chevron-right"></i></a></span> <span>About Us <i class="fa fa-chevron-right"></i></span></p>
        <div class="masthead-heading text-uppercase ">About us</div>
    </div>
</header>
<section class="page-section" id="about">
    <div class="container">
        <ul class="timeline">
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('style/assets/img/about/a-6.png')}}" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Online Tanpa Tatap Muka</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Mau kapan pun, di mana pun, bisa belajar. Setiap kelas tersedia forum diskusi untuk dapat bertanya hal teknis terkait materi.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('style/assets/img/about/a-7.png')}}" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Bedah Kode Developer Expert</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Setiap tugas direview oleh developer expert. Feedback diberikan secara in-line pada kode yang siswa tulis.</p>
                    </div>
                </div>
            </li>
            <li>
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('style/assets/img/about/a-9.png')}}" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Akses Seumur Hidup</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Akses ke kelas tersedia seumur hidup bagi lulusannya, termasuk akses ke materi terbaru dan forum diskusinya.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image"><img class="rounded-circle img-fluid" src="{{ asset('style/assets/img/about/a-10.png')}}" alt="" /></div>
                <div class="timeline-panel">
                    <div class="timeline-heading">
                        <h4 class="subheading">Alur Belajar Jelas</h4>
                    </div>
                    <div class="timeline-body">
                        <p class="text-muted">Tidak perlu bingung mulai dari mana, berbagai learning path disusun terstruktur agar target belajar lebih mudah tercapai.</p>
                    </div>
                </div>
            </li>
            <li class="timeline-inverted">
                <div class="timeline-image">
                    <h4>
                        It's
                        <br />
                        About
                        <br />
                        Us
                    </h4>
                </div>
            </li>
        </ul>
    </div>
</section>

@endsection