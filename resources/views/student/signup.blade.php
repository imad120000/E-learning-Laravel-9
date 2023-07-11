@extends('layouts.app5')

@section('title')
Sign Up
@endsection

@section('body')

    <body class="bg-login">
        <!--wrapper-->
        <div class="wrapper">
            <div class="d-flex align-items-center justify-content-center my-5 my-lg-0">
                <div class="container">
                    <div class="row row-cols-1 row-cols-lg-2 row-cols-xl-2">
                        <div class="col mx-auto">
                            <div class="card">
                                <div class="card-body">
                                    <div class="border p-4 rounded">
                                        <div class="text-center">
                                            <h3 class="">Sign Up</h3>
                                            <p>Already have an account? <a href="{{route('student.login')}}">Login</a>
                                            </p>
                                        </div>

                                        <div class="login-separater text-center mb-4">
                                            <span></span>

                                        </div>
                                        <div class="form-body">
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
                                            <form class="row g-3" method="post" action="{{ route('student.addetd') }}"
                                                enctype="multipart/form-data">
                                                @csrf
                                                <div class="col-sm-6">
                                                    <label for="inputFirstName" class="form-label">Name</label>
                                                    <input type="text" name="name" class="form-control"
                                                        id="inputFirstName" placeholder="Amjid" required>
                                                </div>
                                                <div class="col-sm-6">
                                                    <label for="inputLastName" class="form-label">Prenom</label>
                                                    <input type="text" name="prenom" class="form-control"
                                                        id="inputLastName" placeholder="Imad" required>
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputEmailAddress" class="form-label">Adress</label>
                                                    <input type="text" name="adress" class="form-control"
                                                        id="inputEmailAddress" placeholder="Adress" required>
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputEmailAddress" class="form-label">Tele</label>
                                                    <input type="text" name="tele" class="form-control"
                                                        id="inputEmailAddress" placeholder="0644608345" required>
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputEmailAddress" class="form-label">Date Naissance</label>
                                                    <input type="date" name="date" class="form-control"
                                                        id="inputEmailAddress"  required>
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputEmailAddress" class="form-label">Photo profile</label>
                                                    <input type="file" name="image" class="form-control"
                                                        id="inputEmailAddress" placeholder="Image" required>
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputEmailAddress" class="form-label">Email</label>
                                                    <input type="email" name="email" class="form-control"
                                                        id="inputEmailAddress" placeholder="amjidimad88@gmail.com" required>
                                                </div>
                                                <div class="col-12">
                                                    <label for="inputChoosePassword" class="form-label">Password</label>
                                                    <div class="input-group" id="show_hide_password">
                                                        <input type="password" name="password"
                                                            class="form-control border-end-0" id="inputChoosePassword"
                                                            placeholder="Enter Password" required> <a href="javascript:;"
                                                            class="input-group-text bg-transparent"><i
                                                                class='bx bx-hide'></i></a>
                                                    </div>
                                                </div>

                                                <div class="col-12">
                                                    <div class="d-grid">
                                                        <button type="submit" class="btn btn-primary"><i
                                                                class='bx bx-user'></i>Sign up</button>
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
