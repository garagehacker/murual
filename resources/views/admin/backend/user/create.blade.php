@extends('admin.master.master_admin')
@section('content')

    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    {{--<h1 class="m-0">Add New Doctor</h1>--}}
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="{{url('/dashboard')}}">Home</a></li>
                        <li class="breadcrumb-item active">Add New User</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Add New User</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form  method="POST" action="{{route('users.store')}}">
                    @csrf
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputName">Name</label>
                                    <input type="text" class="form-control" name="name" id="exampleInputName" placeholder="Enter Name" aria-invalid="true">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email"  name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPhone">Phone Number</label>
                                    <input type="number" name="mobile" class="form-control" id="exampleInputPhone" placeholder="Enter Phone Number">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputAlternativePhone">Country</label>
                                    <input type="text"  name="country" class="form-control" id="exampleInputAlternativePhone" placeholder="Enter Country">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputAlternativePhone">Zip Code</label>
                                    <input type="number"  name="zip_code" class="form-control" id="exampleInputAlternativePhone" placeholder="Enter Zip Code">
                                </div>
                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputAddress">Address</label>
                                    <textarea class="form-control" name="address" rows="3" id="exampleInputAddress" placeholder="Enter ..."></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer" align="right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <button type="submit" class="btn btn-danger">Back</button>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </section>

@endsection


