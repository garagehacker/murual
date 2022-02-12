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
                        <li class="breadcrumb-item active">App Version List</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    @if(session()->has('message'))
        <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    @if(session()->has('delete'))
        <div class="alert alert-danger">
            {{ session()->get('delete') }}
        </div>
    @endif
    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <!-- /.card -->
                    <div class="card">
                        <div class="card-header">
                            <div class="row">
                                <div class="col-md-6"  align="right">
                                    <h3 class="card-title">App Versions</h3>
                                </div>
                                <div class="col-md-6" align="right">
                                    <button class="btn btn-info btn-sm" data-toggle="modal" data-target="#modal-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New</button>
                                </div>


                            </div>
                        </div>
                        <div class="modal fade" id="modal-sm">
                            <div class="modal-dialog modal-sm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h4 class="modal-title">Add Version</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <form  method="POST" action="{{route('current_version.store')}}">
                                        @csrf
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputName">Version SWAT</label>
                                                    <input type="text" required class="form-control" name="current_app_version_swat" id="exampleInputName" placeholder="Enter Version SWAT" aria-invalid="true">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="exampleInputName">Version SWATIVERSE</label>
                                                    <input type="text" required class="form-control" name="current_app_version_swativerse" id="exampleInputName" placeholder="Enter Version SWATIVERSE" aria-invalid="true">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal-footer justify-content-between">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                        <button type="submit" class="btn btn-primary">Save changes</button>
                                    </div>
                                    </form>
                                </div>
                                <!-- /.modal-content -->
                            </div>
                            <!-- /.modal-dialog -->
                        </div>
                        <!-- /.modal -->
                        <!-- /.card-header -->
                        <div class="card-body">

                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sl.no</th>
                                    <th>Version SWAT</th>
                                    <th>Version SWATIVERSE</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($versions as $key=>$version)
                                    <tr>
                                        <td>{{$key+1}}</td>
                                        <td>{{$version->current_app_version_swat}}</td>
                                        <td>{{$version->current_app_version_swativerse}}</td>

                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Sl.no</th>
                                    <th>Version SWAT</th>
                                    <th>Version SWATIVERSE</th>
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

