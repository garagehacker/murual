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
                        <li class="breadcrumb-item active">Add Folio</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <section class="content">
        <div class="container-fluid">
            <div class="card card-info">
                <div class="card-header">
                    <h3 class="card-title">Add New Folio</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form  method="POST" action="{{url('folio-create-store', $id)}}">
                    @csrf
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputName">Folio No.</label>
                                    <input type="text" required class="form-control" name="nfo_folio_no" id="exampleInputName" placeholder="Enter Folio No." aria-invalid="true">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputName">Folio Type</label>
                                    <input type="text" required class="form-control" name="nfo_folio_type" id="exampleInputName" placeholder="Enter Folio Type" aria-invalid="true">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputName">Start Date</label>
                                    <input type="date" required class="form-control" name="nfo_start_date" id="exampleInputName" placeholder="Enter Start Date" aria-invalid="true">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Product Name</label>
                                    <input type="text" required name="nfo_product_name" class="form-control" id="exampleInputEmail1" placeholder="Enter Product Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Unit Balance</label>
                                    <input type="text" required name="nfo_balance_unit" class="form-control" id="exampleInputEmail1" placeholder="Enter Unit Balance">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Average Cost Price</label>
                                    <input type="text" required name="nfo_avg_cost_price" class="form-control" id="exampleInputEmail1" placeholder="Enter Average Cost Price">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputPhone">Purchase Cost Price</label>
                                    <input type="text" required name="nfo_purchase_cost_price" class="form-control" id="exampleInputPhone" placeholder="Enter Purchase Cost Price">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputAlternativePhone">Init Paid</label>
                                    <input type="text" required name="nfo_div_init_paid" class="form-control" id="exampleInputAlternativePhone" placeholder="Enter NAV Value">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputAlternativePhone">Init Reinv</label>
                                    <input type="text" required name="nfo_div_init_reinv" class="form-control" id="exampleInputAlternativePhone" placeholder="Enter Market Value">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputAlternativePhone">No of Days</label>
                                    <input type="text" required name="nfo_no_days" class="form-control" id="exampleInputAlternativePhone" placeholder="Enter NAV Value">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputAlternativePhone">Current Nav</label>
                                    <input type="text" required name="nfo_current_nav" class="form-control" id="exampleInputAlternativePhone" placeholder="Enter Market Value">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputAlternativePhone">Current Value</label>
                                    <input type="text" required name="nfo_curret_value" class="form-control" id="exampleInputAlternativePhone" placeholder="Enter NAV Value">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputAlternativePhone">Profit/Loss</label>
                                    <input type="text" required name="nfo_profile_plus_loss" class="form-control" id="exampleInputAlternativePhone" placeholder="Enter Market Value">
                                </div>
                            </div>

                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputAlternativePhone">ABS %</label>
                                    <input type="text" required name="nfo_abs_percentage" class="form-control" id="exampleInputAlternativePhone" placeholder="Enter NAV Value">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputAlternativePhone">CAGR</label>
                                    <input type="text" required name="nfo_cagr" class="form-control" id="exampleInputAlternativePhone" placeholder="Enter Market Value">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputAlternativePhone">XIRR</label>
                                    <input type="text" required name="nfo_xirr" class="form-control" id="exampleInputAlternativePhone" placeholder="Enter Market Value">
                                </div>
                            </div>

                        </div>


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer" align="right">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a href="{{url('/folio', $id)}}" class="btn btn-danger">Back</a>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </section>

@endsection


