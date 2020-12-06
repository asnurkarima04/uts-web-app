@extends('tema.master')
@section('content')

<section class="page-section" id="login">
    <div class="container">
        <div class="card w-50 ">
            <div class="card-body">
                <div class="text-center">
                    <h2 class="section-heading text-dark">Registrasi</h2>
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

                <form action="{{ route("daftar_proses") }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input name="first" class="form-control" type="text" placeholder="First Name *">
                        </div>
                        <div class="form-group col-md-6">
                            <input name="last" class="form-control" type="text" placeholder="Last Name *">
                        </div>
                    </div>
                    <div class="form-group">
                        <input name="username" class="form-control" type="text" placeholder="Username *">
                    </div>
                    <div class="form-group">
                        <input name="email" class="form-control" type="text" placeholder="Email *">
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <input name="password" class="form-control" type="password" placeholder="Password *">
                        </div>
                        <div class="form-group col-md-6">
                            <input name="confirm" class="form-control" type="password" placeholder="Confirm Password *">
                        </div>
                    </div>
                    <div class="form-group mb-md-0">
                        <input name="picture" class="form-control" id="picture" type="file" placeholder="Your Picture *" />
                        <p class="help-block text-danger"></p>
                    </div>
                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="gridCheck">
                            <label class="form-check-label text-dark" for="gridCheck">
                                Saya setuju dengan syarat & ketentuan yang berlaku
                            </label>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary">Sign Up</button>
                    </div>
                    <p class="text-dark">Sudah Punya Akun? Klik disini -> <a href="/masuk/add">Sign In</a></p>
                </form>
            </div>
        </div>
    </div>
</section>

@endsection