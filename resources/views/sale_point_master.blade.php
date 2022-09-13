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
                            <a href="javascript:void(0);"> Masters</a>
                        </li>
                        <li class="active">
                            Sale Point 
                        </li>
                    </ol>
                </div>
            </div><!-- row -->

            <div class="row">
              <div class="col-sm-6">
                <div class="m-b-30">
                  <button id="addToTable" class="btn btn-default waves-effect waves-light" data-target="#modal_form" data-toggle="modal" onclick="$('#sale_point_master_form')[0].reset();">Add SalePoint <i class="fa fa-plus"></i></button>
              </div>
          </div>
</div>
<div class="row">
    <div class="col-sm-12">
        <div class="portlet">
            <div class="portlet-heading bg-success">
                <h3 class="portlet-title">
                   SalePoint Master 
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
                    <h4 class="m-t-0 header-title"><b>{{-- SalePoint MAsters --}}</b></h4>

                    <table id="datatable" class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>Sno</th>
                                <th>Name</th>                              
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


<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="color:#fff">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">Salepoint</h4>
            </div>   
            <br>
            <form class="form-horizontal" role="form" id="sale_point_master_form" method="post">
                @csrf()                                        
                <input type="hidden" name="id" id="hidden_id">

                <div class="form-group">
                    <label class="control-label col-md-3">Salepoint <span class="red">*</span></label>
                    <div class="col-md-7">
                        <input ype="text" class="form-control" value="" name="name" id="name" placeholder="Enter name">
                        <span class="help-block"></span>
                    </div>
                </div>

                <div class="modal-footer">
                    <button type="submit" id="btnSave"  class="btn btn-primary">Save</button>
                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Cancel</button>
                </div>
            </form>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->
<!-- End Bootstrap modal -->




@endsection


