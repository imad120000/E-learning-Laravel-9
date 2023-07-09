@extends('layouts.app9')


@section('controle')
    menu-open
@endsection

@section('co')
    active
@endsection

@section('r')
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
                                <li class="breadcrumb-item active">Roles</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->


            <section class="content">
                <div class="container-fluid">
                    <!-- Small boxes (Stat box) -->
                    <div class="card">
                        <div class="card-body">
                            <div id="example1_wrapper" class="dataTables_wrapper dt-bootstrap4">
                                <div class="row">

                                    <div class="col-lg-12 margin-tb">

                                        <div class="pull-left">

                                            <h2>Roles Management</h2>

                                        </div>
                                        @can('controle-role-create')
                                            <div class="pull-right">

                                                <a class="btn btn-success" href=" {{ route('admin.createrole') }} "> Create
                                                    Roles</a>

                                            </div>
                                        @endcan

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
                                                    <th>Number</th>
                                                    <th>Name</th>
                                                    <th width="280px">Action</th>
                                                </tr>
                                            </thead>

                                            @foreach ($roles as $key => $role)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td class="badge badge-success" style="margin: 8px">{{ $role->name }}
                                                    </td>
                                                    <td>
                                                        @can('controle-role-show')
                                                            <a class="btn btn-info"
                                                                href="{{ route('admin.showrole', $role->id) }}">Show</a>
                                                        @endcan
                                                        @can('controle-role-edit')
                                                            <a class="btn btn-primary"
                                                                href="{{ route('admin.editrole', $role->id) }}">Edit</a>
                                                        @endcan
                                                        @can('controle-role-destroy')
                                                            {!! Form::open(['method' => 'DELETE', 'route' => ['admin.roledelete', $role->id], 'style' => 'display:inline']) !!}
                                                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                            {!! Form::close() !!}
                                                        @endcan
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                </div><!-- /.container-fluid -->
            </section>
        </div>
    </div>
@endsection
