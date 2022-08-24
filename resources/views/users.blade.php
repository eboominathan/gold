@extends('layouts.application')
@section('content')
<!-- ============================================================== -->
<!-- Start right Content here -->
<!-- ============================================================== -->
<div class="content-page">
    <!-- Start content -->
    <div class="content">
        <div class="container">

            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">


                    <h4 class="page-title">{{$title}}</h4>
                    <ol class="breadcrumb">                             
                        <li>
                            <a href="javascript:void(0);">Users</a>
                        </li>
                        <li class="active">
                           Users
                        </li>
                    </ol>
                </div>
            </div><!-- row -->

            <div class="row">
                <div class="col-sm-12">
                    <div class="portlet">
                        <div class="portlet-heading bg-success">
                            <h3 class="portlet-title    ">
                                Users
                            </h3>
                            <div class="portlet-widgets">
                                <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                <span class="divider"></span>
                                <a data-toggle="collapse" data-parent="#accordion1" href="#bg-success"><i class="ion-minus-round"></i></a>
                                <span class="divider"></span>
                                <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div id="bg-success" class="panel-collapse collapse in">
                            <div class="portlet-body">
                                <div class="card-box table-responsive">
                                    <form class="form-horizontal" role="form" id="pin_generate_form">

                                        <div class="form-group">
                                            <label class="control-label col-md-3">First Name <span class="red">*</span></label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" value="" name="total_pin" id="total_pin" placeholder="Enter First name">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Last Name<span class="red">*</span></label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" value="" name="id_no" id="id_no" placeholder="Enter Last Name">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Email<span class="red">*</span></label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" value="" name="id_no" id="id_no" placeholder="Enter Email">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3">Salepoint Id<span class="red">*</span></label>
                                            <div class="col-md-7">
                                                <input type="text" class="form-control" value="" name="id_no" id="id_no" placeholder="Enter Salepoint id">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group text-center m-b-0">
                                            <button class="btn btn-primary waves-effect waves-light" type="submit">
                                                Submit
                                            </button>
                                            <button type="reset" class="btn btn-danger waves-effect waves-light m-l-5">
                                                Cancel
                                            </button>
                                        </div>


                                    </form> 

                                </div>
                            </div>{{-- port body --}}
                        </div>{{-- panel-collapse --}}
                    </div>{{-- portlet --}}
                </div>
            </div>




            <div class="row">
                <div class="col-sm-12">
                    <div class="portlet">
                        <div class="portlet-heading bg-success">
                            <h3 class="portlet-title">
                                Users Details
                            </h3>
                            <div class="portlet-widgets">
                                <a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
                                <span class="divider"></span>
                                <a data-toggle="collapse" data-parent="#accordion1" href="#pin_table"><i class="ion-minus-round"></i></a>
                                <span class="divider"></span>
                                <a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        <div id="pin_table" class="panel-collapse collapse in">
                            <div class="portlet-body">
                                <div class="card-box table-responsive">
                                    {{-- <h4 class="m-t-0 header-title"><b>Pin Bank</b></h4> --}}
                                    <form  role="form" id="pin_generate_search_form">
                                        <div class="form-group">
                                            <label class="control-label col-md-1">ID No</label>
                                            <div class="col-md-4">
                                                <input type="text" class="form-control" value="" name="total_pin" id="total_pin" placeholder="Enter ID No">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-1">Pin No</label>
                                            <div class="col-md-4">
                                                <i`nput type="text" class="form-control"  name="total_pin" id="total_pin" placeholder="Enter Pin">
                                                <span class="help-block"></span>
                                            </div>
                                        </div>
                                    </form>
                                    <div class="clearfix"></div><br>
                                    <table id="datatable" class="table table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>Sno</th>
                                                <th>Name</th>
                                                <th>Email</th>
                                                <th>Sale Point Id</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody></tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



        </div> <!-- container -->

    </div> <!-- content -->

    <footer class="footer">
        © 2022. All rights reserved.
    </footer>

</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


@endsection


