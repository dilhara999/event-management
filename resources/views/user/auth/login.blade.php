@extends('user.layouts.app')

@section('content')
    <div class="container-fluid">
        
        <div class="vh-100">
            <div class="container py-5 h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col col-xl-10">
                        <div class="card  login-card" style="border-radius: 1rem;">
                            <div class="row g-0">
                                <div class="col-md-6 col-lg-5 d-none d-md-block">

                                    {{-- image --}}
                                    <img src="assets/image/homepage/bgimg1.jpg" alt="login form" class="img-fluid"
                                        style="border-radius: 1rem 0 0 1rem;" />
                                </div>
                                <div class="col-md-6 col-lg-7 d-flex align-items-center justify-content-center">
                                    <div class="card-body p-4 p-lg-5 text-black">

                                    {{-- database connection --}}
                                        @if (session()->has('message'))
                                            <div class="col-md-4">
                                                <div class="alert alert-success alert-dismissible fade show" role="alert">
                                                    {{ session()->get('message') }}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>
                                        @endif

                                        @if (session()->has('error'))
                                            <div class="col-md-4">
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    {{ session()->get('error') }}
                                                    <button type="button" class="btn-close" data-bs-dismiss="alert"
                                                        aria-label="Close"></button>
                                                </div>
                                            </div>hjj
                                        @endif




                                        <form action="{{ url('signIn') }}" method="post" enctype="multipart/form-data">
                                            {{ csrf_field() }}

                                            <div class="form-group pt-3 mb-5 text-center">
                                                <h1 class="fw-bold txt">Welcome</h1>
                                                <h3 class="fw-bold txt">Pure Moments</h3>
                                                <h6 class="txt1">Enter Your email and password to access your account</h6>
                                            </div>

                                            <div class="form-group pt-5">
                                                <h6 class="txt2 opacity-50">Email</h6>
                                                <input type="email" class="form-control input py-2 px-4" id="email"
                                                    name="email" aria-describedby="emailHelp" placeholder="Email" required>
                                            </div>

                                            <div class="form-group pt-3">
                                                <h6 class="txt2 opacity-50">Password</h6>
                                                <input type="password" class="form-control input py-2 px-4" id="password"
                                                    name="password" placeholder="********" required>
                                            </div>

                                            <div class="pt-3 mb-4">
                                                <button class="btn btn-main btn-block w-100 py-2" type="submit">
                                                    Login</button>
                                            </div>

                                            <a class="small  text-primary" href="#!">Forgot password?</a>

                                        </form>
                                        <p class="pt-4  text-xl-center">Don't have an account?
                                            <a href="{{ url('register') }}" class="registerlink">Register here</a>
                                        </p>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
        

