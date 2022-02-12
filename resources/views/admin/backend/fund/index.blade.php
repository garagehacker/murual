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
                        <li class="breadcrumb-item active">Fund List</li>
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
                                    <h3 class="card-title">Fund</h3>
                                </div>
                                <div class="col-md-6" align="right">
                                    <a href="{{route('funds.create')}}"><button class="btn btn-info btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New</button></a>
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
                                    <th>Type</th>
                                    <th>URL</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($funds as $key=>$fund)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$fund->nfo_name}}</td>
                                    <td>{{$fund->nfo_type}}</td>
                                    <td><a href="{{$fund->nfo_url}}" target="_blank">{{$fund->nfo_url}}</a></td>
                                    <td>{{$fund->nfo_start_date}}</td>
                                    <td>{{$fund->nfo_end_date}}</td>
                                    <td>
                                        <a href="{{route('funds.edit', $fund->id)}}"><button class="btn btn-success btn-xs"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button></a>

                                            <form action="{{route('funds.destroy', $fund->id)}}" method="POST">
                                                {{method_field('DELETE')}}
                                                {{csrf_field()}}
                                                <button class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button>
                                            </form>
                                    </td>
                                </tr>
                                    @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Sl.no</th>
                                    <th>Name</th>
                                    <th>Type</th>
                                    <th>URL</th>
                                    <th>Start Date</th>
                                    <th>End Date</th>
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

