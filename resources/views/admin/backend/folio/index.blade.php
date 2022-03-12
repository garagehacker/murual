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
                        <li class="breadcrumb-item active">Folio List</li>
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
                                    <h3 class="card-title">{{$user->first_name}} {{$user->last_name}} Folio List</h3>
                                </div>
                                <div class="col-md-6" align="right">
                                    <a href="{{url('folio-create', $id)}}"><button class="btn btn-info btn-sm"><i class="fa fa-plus-circle" aria-hidden="true"></i> Add New</button></a>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">


                            <form action="{{ route('file-import') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-4" style="max-width: 500px; margin: 0 auto;">
                                    <div class="custom-file text-left">
                                        <input type="file" name="file" class="custom-file-input" id="customFile">
                                        <label class="custom-file-label" for="customFile">Choose file</label>
                                    </div>
                                </div>
                                <button class="btn btn-primary">Import data</button>
                                <a class="btn btn-success" href="{{ route('file-export') }}">Export data</a>
                            </form>
                            <table id="example1" class="table table-bordered table-striped table-responsive">
                                <thead>
                                <tr>
                                    <th>Folio No.</th>
                                    <th>Scheme Name</th>
                                    <th>Folio Type</th>
                                    <th>Unit Balance</th>
                                    <th>Start Date</th>
                                    <th>Current Nav</th>
                                    <th>Current Value</th>
                                    <th>Profit/loss</th>
                                    <th>Average Cost Price</th>
                                    <th>Purchase Cost Price</th>
                                    <th>Init Paid</th>
                                    <th>Init Reinv</th>
                                    <th>No of Days</th>
                                    <th>ABS %</th>
                                    <th>CAGR</th>
                                    <th>XIRR</th>
                                    <th>Option</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($folios as $key=>$folio)
                                    <tr>
                                        <td>{{$folio->nfo_folio_no}}</td>
                                        <td>{{$folio->nfo_product_name}}</td>
                                        <td>{{$folio->nfo_folio_type}}</td>
                                        <td>{{$folio->nfo_balance_unit}}</td>
                                        <td>{{$folio->nfo_start_date}}</td>
                                        <td>{{$folio->nfo_current_nav}}</td>
                                        <td>{{$folio->nfo_curret_value}}</td>
                                        <td>{{$folio->nfo_profile_plus_loss}}</td>
                                        <td>{{$folio->nfo_avg_cost_price}}</td>
                                        <td>{{$folio->nfo_purchase_cost_price}}</td>
                                        <td>{{$folio->nfo_div_init_paid}}</td>
                                        <td>{{$folio->nfo_div_init_reinv}}</td>
                                        <td>{{$folio->nfo_no_days}}</td>
                                        <td>{{$folio->nfo_abs_percentage}}</td>
                                        <td>{{$folio->nfo_cagr}}</td>
                                        <td>{{$folio->nfo_xirr}}</td>
                                        <td>
                                            <a href="{{route('folio-edit', $folio->id)}}"><button class="btn btn-success btn-xs"><i class="fa fa-edit" aria-hidden="true"></i> Edit</button></a>
                                            <a href="{{route('folio-delete', $folio->id)}}"><button class="btn btn-danger btn-xs"><i class="fa fa-trash" aria-hidden="true"></i> Delete</button></a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Folio No.</th>
                                    <th>Scheme Name</th>
                                    <th>Folio Type</th>
                                    <th>Unit Balance</th>
                                    <th>Start Date</th>
                                    <th>Current Nav</th>
                                    <th>Current Value</th>
                                    <th>Profit/loss</th>
                                    <th>Average Cost Price</th>
                                    <th>Purchase Cost Price</th>
                                    <th>Init Paid</th>
                                    <th>Init Reinv</th>
                                    <th>No of Days</th>
                                    <th>ABS %</th>
                                    <th>CAGR</th>
                                    <th>XIRR</th>
                                    <th>Option</th>
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

