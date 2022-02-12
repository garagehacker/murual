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
                        <li class="breadcrumb-item active">Edit User</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Edit User</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form  method="POST" action="{{route('users.update', $id)}}">
                    @method('PATCH')
                    @csrf
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputName">First Name</label>
                                    <input type="text" class="form-control" value="{{$user->first_name}}" name="first_name" id="exampleInputName" placeholder="Enter Name" aria-invalid="true">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputName">Last Name</label>
                                    <input type="text" class="form-control" value="{{$user->last_name}}" name="last_name" id="exampleInputName" placeholder="Enter Name" aria-invalid="true">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email"  name="email" value="{{$user->email}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPhone">Phone Number</label>
                                    <input type="number" name="mobile" value="{{$user->mobile}}" class="form-control" id="exampleInputPhone" placeholder="Enter Phone Number">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputAlternativePhone">Country</label>
                                    <input type="text"  name="country" value="{{$user->country}}" class="form-control" id="exampleInputAlternativePhone" placeholder="Enter Country">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputAlternativePhone">Zip Code</label>
                                    <input type="number"  name="zip_code" value="{{$user->zip_code}}" class="form-control" id="exampleInputAlternativePhone" placeholder="Enter Zip Code">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="exampleInputAddress">Address</label>
                                    <textarea class="form-control" name="address" rows="3" id="exampleInputAddress" placeholder="Enter ...">{{$user->address}}</textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer" align="right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{url('/users')}}"  class="btn btn-danger">Back</a>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </section>

@endsection


