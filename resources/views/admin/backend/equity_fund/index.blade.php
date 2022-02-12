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
                        <li class="breadcrumb-item active">Equity Fund List</li>
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
                                    <h3 class="card-title">Equity Fund</h3>
                                </div>
                                <div class="col-md-6" align="right">
                                    <a href="{{route('equity_funds.create')}}"><button class="btn btn-info btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New</button></a>
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
                                    <th>URL</th>
                                    <th>Risk</th>
                                    <th>Return</th>
                                    <th>Options</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($equity_funds as $key=>$equity_fund)
                                <tr>
                                    <td>{{$key+1}}</td>
                                    <td>{{$equity_fund->fund_name}}</td>
                                    <td><a href="{{$equity_fund->fund_url}}" target="_blank">{{$equity_fund->fund_url}}</a></td>
                                    <td>{{$equity_fund->fund_risk}}</td>
                                    <td>{{$equity_fund->fund_return}}</td>
                                    <td>
                                        <a href="{{route('equity_funds.edit', $equity_fund->id)}}"><button class="btn btn-success btn-xs"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button></a>

                                            <form action="{{route('equity_funds.destroy', $equity_fund->id)}}" method="POST">
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
                                    <th>URL</th>
                                    <th>Risk</th>
                                    <th>Return</th>
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

