@extends('tema.master')
@section('content')

<section class="page-section" id="login">
    <div class="container">
        <div class="card w-50 bg-light">
            <div class="card-body text-center ">
                <h2 class="section-heading text-dark">Log In</h2>
                <h3 class="section-subheading ">Silahkan masuk bila anda sudah memiliki akun.</h3>

                <div class="text-left">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                </div>

                <form action="{{ route("masuk_proses") }}" method="POST">
                    @csrf
                    <div class="col-md-12">
                        <div class="form-group">
                            <input name="email" class="form-control" id="email" type="text" placeholder="Email *" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="form-group">
                            <input name="password" class="form-control" id="pasword" type="password" placeholder="Password *" />
                            <p class="help-block text-danger"></p>
                        </div>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-primary text-uppercase" type="submit">Sign In</button>
                    </div>
                </form>
            </div>
            <p class="text-center ">Belum Punya Akun? Klik disini -> <a href="/daftar/add">Sign Up</a></p>
        </div>
    </div>
</section>





@endsection