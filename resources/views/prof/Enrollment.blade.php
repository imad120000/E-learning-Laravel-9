@extends('layouts.app4')

@section('user')
@endsection

@section('enrol')
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
                    <div class="card">
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

                        <div class="card-body">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1"
                                            class="table table-bordered table-striped dataTable dtr-inline collapsed"
                                            aria-describedby="example1_info">
                                            <thead>
                                                <tr>

                                                    <th>Student</th>
                                                    <th>Cours</th>
                                                    <th>Niveau</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @foreach ($student as $c)
                                                <tbody>
                                                    <tr class="odd">

                                                        <td>
                                                            <img src="{{ asset('etd/' . $c->image) }}" width="70"
                                                                style="padding: 2px" />
                                                            {{ $c->name }} {{ $c->prenom }}
                                                        </td>
                                                        <td class="dtr-control sorting_1" tabindex="0">
                                                            {{ $c->title }}
                                                        </td>

                                                        <td>
                                                            {{ $c->niveau }}
                                                        </td>
                                                        <td>
                                                            <a href="#accpte{{ $c->idc}}" class="btn btn-primary"
                                                                  data-toggle="modal">Accepté</a>

                                                            <a href="#decline{{$c->idc}}" class="btn btn-danger"
                                                                data-toggle="modal">Decline</a>
                                                        </td>

                                                    </tr>
                                                </tbody>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-5">
                                        <div class="dataTables_info" id="example1_info" role="status" aria-live="polite">
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-7">
                                        <div class="dataTables_paginate paging_simple_numbers" id="example1_paginate">
                                            <ul class="pagination">
                                                <li class="paginate_button page-item previous disabled"
                                                    id="example1_previous"><a href="#" aria-controls="example1"
                                                        data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
                                                </li>
                                                <li class="paginate_button page-item active"><a href="#"
                                                        aria-controls="example1" data-dt-idx="1" tabindex="0"
                                                        class="page-link">1</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="example1" data-dt-idx="2" tabindex="0"
                                                        class="page-link">2</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="example1" data-dt-idx="3" tabindex="0"
                                                        class="page-link">3</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="example1" data-dt-idx="4" tabindex="0"
                                                        class="page-link">4</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="example1" data-dt-idx="5" tabindex="0"
                                                        class="page-link">5</a></li>
                                                <li class="paginate_button page-item "><a href="#"
                                                        aria-controls="example1" data-dt-idx="6" tabindex="0"
                                                        class="page-link">6</a></li>
                                                <li class="paginate_button page-item next" id="example1_next"><a
                                                        href="#" aria-controls="example1" data-dt-idx="7"
                                                        tabindex="0" class="page-link">Next</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>



            @foreach ($student as $f)
                <div id="accpte{{ $f->idc }}" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="post" action="{{route('prof.addenroll',$f->idc)}}">
                                @csrf
                                <div class="modal-header">
                                    <h4 class="modal-title">Enrollement</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                  <p>Are you sure you want to accepte ?</p>
                                  <p class="text-warning"><small>This action cannot be undone.</small></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <input type="submit" class="btn btn-info" value="Accepté">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach




        </div>

    </div>
@endsection
