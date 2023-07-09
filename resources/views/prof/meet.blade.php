@extends('layouts.app4')


@section('meet')
    menu-open
@endsection

@section('meet')
menu-open
@endsection

@section('m')
active
@endsection

@section('add')
    active
@endsection


@section('body')
    <div class="wrapper">
        <!-- Content Wrapper. Contains page content -->
        <!-- /.content-header -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Meet</h1>
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
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <!-- jquery validation -->
                            <div class="card card-primary">
                                <div class="card-header">
                                    <h3 class="card-title">Meet</h3>
                                </div>
                                <!-- /.card-header -->
                                <!-- form start -->
                                <br>
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
                                <form id="quickForm" method="POST" action="{{ route('prof.addmeet') }}">
                                    @csrf
                                    <br>
                                    <div class="card-body">
                                        <div class="row mb-4">
                                            <div class="col">
                                                <div class="form-outline">
                                                    <label class="form-label" for="meet_title">Meet title</label>
                                                    <input type="text" id="meet_title" name="meet_title"
                                                        class="form-control" required />
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-outline">
                                                    <label class="form-label" for="target_niveau">Target Niveau</label>
                                                    <select class="form-control" id="target_niveau" name="target_niveau"
                                                        required>
                                                        <option disabled selected>--Select</option>
                                                        <option value="Standard">Standard</option>
                                                        <option value="Business">Business</option>
                                                        <option value="Premium">Premium</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col">
                                                <div class="form-outline">
                                                    <label class="form-label" for="target_cours">Target cours</label>
                                                    <select class="form-control" id="target_cours" name="target_cours"
                                                        required>
                                                        <option disabled selected>--Select</option>
                                                        @foreach ($cours as $c)
                                                            <option value="{{ $c->title }}">{{ $c->title }}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row mb-4">
                                            <div class="col">
                                                <div class="form-outline">
                                                    <label class="form-label" for="meet_date">Date meet</label>
                                                    <input type="date" id="meet_date" name="meet_date"
                                                        class="form-control" required />
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







        </div>










    </div>
@endsection
