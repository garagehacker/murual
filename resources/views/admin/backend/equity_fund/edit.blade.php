@extends('admin.master.master_admin')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Edit Equity Fund</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Edit Equity Fund</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form  method="POST" action="{{route('equity_funds.update', $id)}}">
                    @method('PATCH')
                    @csrf
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputName">Name</label>
                                    <input type="text" class="form-control" value="{{$equity_fund->fund_name}}" name="fund_name" id="exampleInputName" placeholder="Enter Name" aria-invalid="true">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputName">Risk</label>
                                    <input type="text" class="form-control" value="{{$equity_fund->fund_risk}}" name="fund_risk" id="exampleInputName" placeholder="Enter Name" aria-invalid="true">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">URL</label>
                                    <input type="text" required name="fund_url" value="{{$equity_fund->fund_url}}" class="form-control" id="exampleInputEmail1" placeholder="Enter url">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Return</label>
                                    <input type="type"  name="fund_return" value="{{$equity_fund->fund_return}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>

                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer" align="right">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{url('/funds')}}"><button class="btn btn-danger">Back</button></a>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </section>

@endsection


