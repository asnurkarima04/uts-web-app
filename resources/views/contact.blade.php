@extends('tema.master')
@section('content')

<section class="page-section" id="contact">
    <div class="container">
        <div class="card w-100 bg-dark">
            <div class="card-body">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Contact Us</h2>
                    <p class="breadcrumbs"><span class="mr-2"><a href="/home" class=" text-decoration-none">Home <i class="fa fa-chevron-right"></i></a></span> <span class="text-light">Contact <i class="fa fa-chevron-right"></i></span></p>
                </div>

                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <form action="{{ route("contact_proses") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row align-items-stretch mb-5">
                        <div class="col-md-6">
                            <div class="form-group">
                                <input name="name" class="form-control" id="name" type="text" placeholder="Your Name *" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input name="email" class="form-control" id="email" type="text" placeholder="Your Email *" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input name="subject" class="form-control" id="subject" type="text" placeholder="Your Subject *" />
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group mb-md-0">
                                <input name="phone" class="form-control" id="phone" type="text" placeholder="Your Phone *" />
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group form-group-textarea mb-md-0">
                                <textarea name="message" class="form-control" rows="8" id="message" placeholder="Your Message *"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary btn-xl text-uppercase" type="submit">Send Message</button>
                    </div>
                </form>
            </div>
        </div>
</section>

@endsection