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
                        <li class="breadcrumb-item active">Add New Fund</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Add New Fund</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form  method="POST" action="{{route('funds.store')}}">
                    @csrf
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputName">Name</label>
                                    <input type="text" required class="form-control" name="nfo_name" id="exampleInputName" placeholder="Enter Name" aria-invalid="true">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputName">Type</label>
                                    <input type="text" required class="form-control" name="nfo_type" id="exampleInputName" placeholder="Enter Type" aria-invalid="true">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">URL</label>
                                    <input type="text" required name="nfo_url" class="form-control" id="exampleInputEmail1" placeholder="Enter url">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Start Date</label>
                                    <input type="date" required name="nfo_start_date" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPhone">End Date</label>
                                    <input type="date" required name="nfo_end_date" class="form-control" id="exampleInputPhone" placeholder="Enter Phone Number">
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer" align="right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{url('/funds')}}"  class="btn btn-danger">Back</a>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </section>

@endsection


