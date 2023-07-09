@extends('layouts.app5')

@section('body')

    <body class="bg-login">
        <!--wrapper-->
        <div class="wrapper">
            <div class="section-authentication-signin d-flex align-items-center justify-content-center my-5 my-lg-0">
                <div class="container-fluid">
                    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-3">
                        <div class="col mx-auto">

                            <div class="card">
                                <div class="card-body">
                                    <div class="border p-4 rounded">
                                        <div class="text-center">
                                            <h3 class="">Sign in</h3>
                                            <p>Don't have an account yet? <a href="authentication-signup.html">Sign up
                                                    here</a>
                                            </p>
                                        </div>

                                        <div class="login-separater text-center mb-4">
                                            <span></span>

                                        </div>
                                        @if (session()->has('succes'))
                                            <div class="alert alert-success">
                                                {{ session()->get('succes') }}
                                            </div>
                                        @endif
                                        @if (session()->has('fail'))
                                            <div class="alert alert-danger">
                                                {{ session()->get('fail') }}
                                            </div>
                                        @endif
                                        <div class="form-body">
                                            <form class="row g-3" method="post" action="{{ route('student.check') }}">
                                                @csrf
                                                <div class="col-12">
                                                    <label for="inputEmailAddress" class="form-label">Email Address</label>
                                                    <input type="email" name="email" class="form-control"
                                                        id="inputEmailAddress" placeholder="Email Address">
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputChoosePassword" class="form-label">Enter
                                                        Password</label>
                                                    <div class="input-group" id="show_hide_password">
                                                        <input type="password" name="password"
                                                            class="form-control border-end-0" id="inputChoosePassword"
                                                            value="12345678" placeholder="Enter Password"> <a
                                                            href="javascript:;" class="input-group-text bg-transparent"><i
                                                                class='bx bx-hide'></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-md-6 text-end"> <a
                                                        href="authentication-forgot-password.html">Forgot Password ?</a>
                                                </div>
                                                <div class="col-12">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-primary"><i
                                                                class="bx bxs-lock-open"></i>Sign in</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end row-->
                </div>
            </div>
        </div>
    @endsection
