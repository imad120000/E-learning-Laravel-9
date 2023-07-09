@extends('layouts.app4')

@section('user')
@endsection

@section('cours')
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
                                    <div class="col-sm-12 col-md-6">
                                        <button class="btn btn-primary" href="#add" data-toggle="modal">Add </button>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1"
                                            class="table table-bordered table-striped dataTable dtr-inline collapsed"
                                            aria-describedby="example1_info">
                                            <thead>
                                                <tr>

                                                    <th>Title</th>
                                                    <th>Niveau</th>
                                                    <th>Categorie</th>
                                                    <th>Des</th>
                                                    <th>Video</th>
                                                    <th>Date de post</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            @foreach ($cours as $c)
                                                <tbody>
                                                    <tr class="odd">
                                                        <td class="dtr-control sorting_1" tabindex="0">
                                                            <img src="{{ asset('cours/' . $c->image) }}"
                                                                style="border-radius: 50%;width: 70px;height: 50px;" />

                                                            {{ $c->title }}
                                                        </td>
                                                        <td>{{ $c->niveau }}</td>
                                                        <td>{{ $c->categorie }}</td>
                                                        <td>{{ $c->des }}</td>
                                                        <td>{{ $c->video }}</td>
                                                        <td>{{ $c->created_at }}</td>
                                                        <td>
                                                            <button class="btn btn-secondary"
                                                                href="#edit{{ $c->id }}" data-toggle="modal">Edit
                                                            </button>
                                                            <button class="btn btn-danger"
                                                                href="#delete{{ $c->id }}"
                                                                data-toggle="modal">Delete </button>
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

            {{-- Add cours --}}
            <form method="post" action="{{ route('prof.add') }}" enctype="multipart/form-data">
                @csrf
                <div id="add" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form>
                                <div class="modal-header">
                                    <h4 class="modal-title"><strong>Add Cours</strong></h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Niveau</label>
                                        <input type="text" name="niveau" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Categorie</label>
                                        <select class="form-control" name="categorie">
                                            @foreach ($cat as $f)
                                                <option value="{{ $f->name }}"> {{ $f->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="des" required></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Video</label>
                                        <input type="text" name="video" class="form-control" required>
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control" required>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <input type="submit" class="btn btn-success" value="Add">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Edit Modal HTML -->
            @foreach ($cours as $f)
                <div id="edit{{ $f->id }}" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form method="post" action="{{ route('prof.update', $f->id) }}"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="modal-header">
                                    <h4 class="modal-title">Edit</h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <div class="form-group">
                                        <label>Title</label>
                                        <input type="text" name="title" class="form-control"
                                            value="{{ $f->title }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Categorie</label>
                                        <select class="form-control" name="categorie">
                                            @foreach ($cat as $s)
                                                <option value="{{ $s->name }}"> {{ $s->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Niveau</label>
                                        <input type="text" name="niveau" class="form-control"
                                            value="{{ $f->niveau }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Description</label>
                                        <textarea class="form-control" name="des">{{ $f->des }}</textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Video</label>
                                        <input type="text" name="video" class="form-control"
                                            value="{{ $f->video }}">
                                    </div>
                                    <div class="form-group">
                                        <label>Image</label>
                                        <input type="file" name="image" class="form-control"
                                            value="{{ $f->image }}">
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <input type="submit" class="btn btn-success" value="Edit">
                                </div>
                        </div>

                        </form>
                    </div>
                </div>
            @endforeach
            <!-- Delete Modal HTML -->
            @foreach ($cours as $d)
                <div id="delete{{ $d->id }}" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <form action="{{ route('prof.delete', $d->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <div class="modal-header">
                                    <h4 class="modal-title">Delete </h4>
                                    <button type="button" class="close" data-dismiss="modal"
                                        aria-hidden="true">&times;</button>
                                </div>
                                <div class="modal-body">
                                    <p>Are you sure you want to delete ?</p>
                                    <p class="text-warning"><small>This action cannot be undone.</small></p>
                                </div>
                                <div class="modal-footer">
                                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                                    <input type="submit" class="btn btn-danger" value="Delete">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach








        </div>

    </div>
@endsection
