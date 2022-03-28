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
                    <h3 class="card-title">Edit Debt Fund</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form  method="POST" action="{{route('debt_funds.update', $id)}}">
                    @method('PATCH')
                    @csrf
                    <div class="card-body">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputName">Name</label>
                                    <input type="text" class="form-control" value="{{$debt_fund->fund_name}}" name="fund_name" id="exampleInputName" placeholder="Enter Name" aria-invalid="true">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">URL</label>
                                    <input type="text" required name="fund_url" value="{{$debt_fund->fund_url}}" class="form-control" id="exampleInputEmail1" placeholder="Enter url">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputName">Risk</label>
                                    <input type="text" class="form-control" value="{{$debt_fund->fund_risk}}" name="fund_risk" id="exampleInputName" placeholder="Enter Name" aria-invalid="true">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Return</label>
                                    <input type="type"  name="fund_return" value="{{$debt_fund->fund_return}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>

                        </div>



                        {{--qwerty--}}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fund Age</label>
                                    <input type="text" required name="fund_age" value="{{$debt_fund->fund_age}}" class="form-control" id="exampleInputEmail1" placeholder="Enter url">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fund Nav</label>
                                    <input type="text" required name="fund_nav" value="{{$debt_fund->fund_nav}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPhone">Fund Aum</label>
                                    <input type="text" required name="fund_aum" value="{{$debt_fund->fund_aum}}" class="form-control" id="exampleInputPhone" placeholder="Enter Phone Number">
                                </div>
                            </div>
                        </div>
                        {{--qwerty--}}
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fund Goal</label>
                                    <input type="text" required name="fund_goal" value="{{$debt_fund->fund_goal}}" class="form-control" id="exampleInputEmail1" placeholder="Enter url">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fund Info</label>
                                    <input type="text" required name="fund_info" value="{{$debt_fund->fund_info}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPhone">Fund Entry Load</label>
                                    <input type="text" required name="fund_entry_load" value="{{$debt_fund->fund_entry_load}}" class="form-control" id="exampleInputPhone" placeholder="Enter Phone Number">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fund Exit Load</label>
                                    <input type="text" required name="fund_exit_load" value="{{$debt_fund->fund_exit_load}}" class="form-control" id="exampleInputEmail1" placeholder="Enter url">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fund Min Sip</label>
                                    <input type="text" required name="fund_min_sip" value="{{$debt_fund->fund_min_sip}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPhone">Fund Min Lumpsum</label>
                                    <input type="text" required name="fund_min_lumpsum" value="{{$debt_fund->fund_min_lumpsum}}" class="form-control" id="exampleInputPhone" placeholder="Enter Phone Number">
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fund Manager Name</label>
                                    <input type="text" required name="fund_manager_name" value="{{$debt_fund->fund_manager_name}}" class="form-control" id="exampleInputEmail1" placeholder="Enter url">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fund Manager Total Exp</label>
                                    <input type="text" required name="fund_manager_total_exp" value="{{$debt_fund->fund_manager_total_exp}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputPhone">Fund Manager Info</label>
                                    <input type="text" required name="fund_manager_info" value="{{$debt_fund->fund_manager_info}}" class="form-control" id="exampleInputPhone" placeholder="Enter Phone Number">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fund Return 1 year</label>
                                    <input type="text" required name="fund_return_1_year" value="{{$debt_fund->fund_return_1_year}}" class="form-control" id="exampleInputEmail1" placeholder="Enter url">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Fund Return 3 year</label>
                                    <input type="text" required name="fund_return_3_year" value="{{$debt_fund->fund_return_3_year}}" class="form-control" id="exampleInputEmail1" placeholder="Enter email">
                                </div>
                            </div>
                        </div>


                    </div>
                    <!-- /.card-body -->

                    <div class="card-footer" align="right">
                        <button type="submit" class="btn btn-primary">Update</button>
                        <a href="{{url('/debt_funds')}}"><button class="btn btn-danger">Back</button></a>
                    </div>
                </form>
            </div>
            <!-- /.card -->
        </div>
    </section>

@endsection


