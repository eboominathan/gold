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
							<a href="javascript:void(0);">SalePoint Members</a>
						</li>
						<li class="active">
							SalePoint Members Details
						</li>
					</ol>
				</div>
			</div><!-- row -->
			{{-- <div class="row">
				<div class="col-sm-12">
			<a href="{{url('/')}}/sale-point-member/create"
				class="btn btn-success"
			 ><i class="fa fa-plus"> </i> Add Salepoint Member </a>
			</div> --}}
			</div>
			<br><br>
			<div class="row">
				<div class="col-sm-12">
					<div class="portlet">
						<div class="portlet-heading bg-success">
							<h3 class="portlet-title 	">
								SalePoint Members Details
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
								<div class="row">
									<div class="col-sm-12">
										<div class="card-box table-responsive">
											<table cellpadding="10" class="table">
												<tr>
														<form>
													<td>
														<label class="control-label">Select Date  </label>
													</td>
													<td>
														<input type="text" class="form-control datepicker" readonly="" id="date_from">
														<span class="help-block">
														</td>
														<td>
															<button  type="button" class="btn btn-primary btnGetInfo">Get Info</button>
															<button type="reset" class="btn btn-danger">Clear</button>
														</td>
														</form>
													</tr>
													<tr>
														<form>

													<td>
														<label class="control-label">Select Month  </label>
													</td>
													<td>
														<input type="text" class="form-control monthpicker" readonly="" id="month_from">
														<span class="help-block">
														</td>
														<td>
															<button type="button" class="btn btn-primary btnGetInfo">Get Info</button>
														<button type="reset" class="btn btn-danger">Clear</button>
														</td>
														</form>
													</tr>
												</table>


												<div class="clearfix"></div>

												<table 									class="table table-striped table-bordered nowrap" cellspacing="0"
												width="100%" id="salepoint_member">
												<thead>
													<tr>
														<th>SNO</th>
														<th>NAME</th>
														<th>SALEPOINT ID No</th>
														<th>PASSWORD</th>
														<th>DATEOF JOINING</th>
														<th >SPONSOR ID NO</th>
														<th>ADDRESS</th>
														<th>PhoneNo</th>
														<th>E-mail</th>
													</tr>
												</thead>
												<tbody></tbody>
											</table>
										</div>
									</div>
								</div>

							</div>{{-- port body --}}
						</div>{{-- panel-collapse --}}
					</div>{{-- portlet --}}
				</div>
			</div>

		</div> <!-- container -->
	</div> <!-- content -->
</div> <!-- content-page -->

@endsection