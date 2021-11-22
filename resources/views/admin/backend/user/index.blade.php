@extends('admin.master.master_admin')

@section('content')
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{--<h1 class="m-0">Doctor's List</h1>--}}
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">User List</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6"  align="right">
                                    <h3 class="card-title">User</h3>
                                </div>
                                <div class="col-md-6" align="right">
                                    <a href="{{route('users.create')}}"><button class="btn btn-info btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New</button></a>
                                </div>
                            </div>
                        </div>

                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sl.no</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $key=>$user)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$user->name}}</td>
                                    <td>{{$user->email}}</td>
                                    <td>{{$user->mobile}}</td>
                                    <td>{{$user->address}}</td>

                                    <td>
                                        <button class="btn btn-primary btn-xs"><i class="fa fa-info-circle" aria-hidden="true"></i> Info</button>
                                        <button class="btn btn-success btn-xs"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button>
                                        <button class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                    </td>
                                </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Sl.no</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Address</th>
                                    <th>Options</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
                <!-- /.col -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </section>

@endsection

