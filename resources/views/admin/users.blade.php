@extends('layouts.app9')


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
                            <h1 class="m-0">Users</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Controlle</a></li>
                                <li class="breadcrumb-item active">Users</li>
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

                                            <h2>Users Management</h2>

                                        </div>

                                        <div class="pull-right">

                                            <a class="btn btn-success" href=" {{ route('admin.create') }} "> Create New
                                                User</a>

                                        </div>

                                    </div>

                                </div>


{{-- 
                                @if ($message = Session::get('success'))
                                    <div class="alert alert-success">

                                        <p>{{ $message }}</p>

                                    </div>
                                @endif --}}

                                <br>
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="example1"
                                            class="table table-bordered table-striped dataTable dtr-inline collapsed"
                                            aria-describedby="example1_info">
                                            <thead>
                                                <tr>
                                                    <th>Number</th>
                                                    <th>Email</th>
                                                    <th>Roles</th>
                                                    <th width="280px">Action</th>
                                                </tr>
                                            </thead>
                                            @foreach ($data as $key => $user)
                                                <tr>
                                                    <td>{{ ++$i }}</td>
                                                    <td>{{ $user->email }}</td>
                                                    <td>
                                                        @if (!empty($user->getRoleNames()))
                                                            @foreach ($user->getRoleNames() as $v)
                                                                <label
                                                                    class="badge badge-success">{{ $v }}</label>
                                                            @endforeach
                                                        @endif
                                                    </td>
                                                    <td>
                                                        @can('controle-user-show')
                                                        <a class="btn btn-info" href="{{ route('admin.show', $user->id) }} ">Show</a>
                                                        @endcan
                                                        @can('controle-user-edit')
                                                        <a class="btn btn-primary" href="{{ route('admin.edit', $user->id) }} ">Edit</a>
                                                        @endcan
                                                        @can('controle-user-destroy')
                                                        {!! Form::open(['method' => 'DELETE','route' => ['admin.delete', $user->id],'style'=>'display:inline']) !!}
                                                        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                                                        @endcan
                                                    {!! Form::close() !!}
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
