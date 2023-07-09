@extends('layouts.app10')


@section('controle')
    menu-open
@endsection

@section('co')
    active
@endsection

@section('users')
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
                            <h1 class="m-0">Roles</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Controlle</a></li>
                                <li class="breadcrumb-item active">Roles</li>
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
                        <div class="card-body">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">
                                    <div class="col-lg-12 margin-tb">
                                        <div class="pull-left">
                                            <h2>Show Roles </h2>
                                        </div>
                                       
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
                                                    <th>Roles</th>
                                                    <th>Permissions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td><strong class="badge badge-success">{{ $role->name }}</strong></td>

                                                    <td>
                                                        @if (!empty($rolePermissions))
                                                            @foreach ($rolePermissions as $v)
                                                                <label
                                                                class="badge badge-primary">{{ $v->name }} </label>
                                                            @endforeach
                                                        @endif
                                                    </td>

                                                </tr>
                                            </tbody>
                                        </table>
                                        <br>
                                        <div class="pull-right">
                                            <a class="btn btn-secondary" href=" {{ route('admin.roles') }} "> Back</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>

    </div>








@endsection
