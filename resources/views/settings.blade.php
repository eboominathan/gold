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
							<a href="javascript:void(0);">Settings</a>
						</li>
						<li class="active">
							Change Password
						</li>
					</ol>
				</div>
			</div><!-- row -->

			<div class="row">
				<div class="col-sm-12">
					<div class="portlet">
						<div class="portlet-heading bg-success">
							<h3 class="portlet-title 	">
							Change Password
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
											<label class="control-label col-md-3">Old Password <span class="red">*</span></label>
											<div class="col-md-7">
												<input type="password" class="form-control" value="" name="old_pwd" id="old_pwd" placeholder="Enter Old Password">
												<span class="help-block"></span>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">New Password <span class="red">*</span></label>
											<div class="col-md-7">
												<input type="password" class="form-control" value="" name="pwd" id="pwd" placeholder="Enter New Password">
												<span class="help-block"></span>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">Re Type Password <span class="red">*</span></label>
											<div class="col-md-7">
												<input type="password" class="form-control" value="" name="rpwd" id="rpwd" placeholder="Retype Password">
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
 

	</div> <!-- content -->

	<footer class="footer">
		© 2022. All rights reserved.
	</footer>

</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


@endsection