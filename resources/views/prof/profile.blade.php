@extends('layouts.app4')
@section('profile')
    active
@endsection


@section('body')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Dashboard</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Dashboard v1</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="row">
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-info">
                                <div class="inner">
                                    <h3>{{$student}}</h3>

                                    <p>Student</p>
                                </div>
                                <div class="icon">
                                    <i class="ion ion-person-add"></i>
                                </div>
                                <a href="{{route('prof.student')}}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-success">
                                <div class="inner">
                                    <h3>{{$cours}}</h3>

                                    <p>Cours</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-book"></i>
                                </div>
                                <ion-icon name="add-circle-outline"></ion-icon>
                                <a href="{{route('prof.cours')}}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-warning">
                                <div class="inner">
                                    <h3>{{$review}}</h3>

                                    <p>Review</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-chalkboard-teacher"></i>
                                </div>
                                <a href="{{route('prof.review')}}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                        <div class="col-lg-3 col-6">
                            <!-- small box -->
                            <div class="small-box bg-danger">
                                <div class="inner">
                                    <h3>{{$enrol}}</h3>

                                    <p>Enroll</p>
                                </div>
                                <div class="icon">
                                    <i class="fas fa-check-circle"></i>
                                </div>
                                <a href="{{route('prof.enroll')}}" class="small-box-footer">More info <i
                                        class="fas fa-arrow-circle-right"></i></a>
                            </div>
                        </div>
                        <!-- ./col -->
                    </div>
                </div><!-- /.container-fluid -->
            </section>
            
            <!-- Main content -->
            @foreach ($prof as $p)
                <section class="content">
                    <div class="container-fluid">
                        <div class="row">
                            <!-- left column -->
                            <div class="col-md-12">
                                <!-- jquery validation -->
                                <div class="card card-primary">
                                    <div class="card-header">
                                        <h3 class="card-title">Profile</h3>
                                    </div>
                                    <br>
                                    <!-- /.card-header -->
                                    <!-- form start -->
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
                                    <form id="quickForm" method="post" action="{{ route('prof.edit', $p->id) }}" enctype="multipart/form-data">
                                        @csrf
                                        <br>
                                        <div class="card-body">
                                            <div class="row mb-4">
                                                <div class="col">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form6Example1">Name</label>
                                                        <input type="text" name="name" value="{{ $p->name }}"
                                                            id="form6Example1" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form6Example2">Prenom</label>
                                                        <input type="text" name="prenom" value="{{ $p->prenom }}"
                                                            id="form6Example2" class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row mb-4">
                                                <div class="col">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form6Example2">Email</label>
                                                        <input type="text" value="{{ $p->email }}" disabled
                                                            id="form6Example2" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form6Example1">Tele</label>
                                                        <input type="text" name="tele" value="{{ $p->tele }}"
                                                            id="form6Example1" class="form-control" />
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row mb-4">
                                                <div class="col">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form6Example1">Date
                                                            Naissance</label>
                                                        <input type="date" name="naissance"
                                                            value="{{ $p->naissance }}" id="form6Example1"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form6Example2">Photo
                                                            profile</label>
                                                        <input type="file" id="form6Example2" name="image"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                            </div>
                                            <br>
                                            <div class="row mb-4">
                                                <div class="col">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form6Example1">Ancien
                                                            password</label>
                                                        <input type="password" name="passwordauncien" id="form6Example1"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form6Example2">Confirm
                                                            Password</label>
                                                        <input type="password" id="form6Example2" class="form-control" />
                                                    </div>
                                                </div>
                                                <div class="col">
                                                    <div class="form-outline">
                                                        <label class="form-label" for="form6Example2">New Password</label>
                                                        <input type="password" name="passwordnew" id="form6Example2"
                                                            class="form-control" />
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                        <!-- /.card-body -->
                                        <div class="card-footer">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <!-- /.card -->
                            </div>
                            <!--/.col (left) -->
                            <!-- right column -->
                            <div class="col-md-6">

                            </div>
                            <!--/.col (right) -->
                        </div>
                        <!-- /.row -->
                    </div><!-- /.container-fluid -->
                </section>
            @endforeach



        </div>

    </div>
@endsection
