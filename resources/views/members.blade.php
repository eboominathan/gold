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
							<a href="javascript:void(0);">Members</a>
						</li>
						<li class="active">
							Members Details
						</li>
					</ol>
				</div>
			</div><!-- row -->
			<div class="row">
				<div class="col-sm-12">
					<div class="portlet">
						<div class="portlet-heading bg-success">
							<h3 class="portlet-title 	">
								Members Details
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
													<td>
														<label class="control-label">Select Date  </label>
													</td>
													<td>
														<input type="text" class="form-control datepicker" readonly="">
														<span class="help-block">
														</td>
														<td>
															<button class="btn btn-primary">Get Info</button>
														</td>
													</tr>
													<tr>
													<td>
														<label class="control-label">Select Month  </label>
													</td>
													<td>
														<input type="text" class="form-control monthpicker" readonly="">
														<span class="help-block">
														</td>
														<td>
															<button class="btn btn-primary">Get Info</button>
														</td>
													</tr>
												</table>


												<div class="clearfix"></div>

												<table id="datatable-responsive"
												class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
												width="100%">
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
												<tbody>
													<tr>
														<td>1</td>
														<td><a href="{{url('/view-member-info')}}">Nixon</a></td>
														<td>123465</td>
														<td>Password</td>
														<td>2011/04/25</td>
														<td>61</td>
														<td>CHENNAI</td>
														<td>5421</td>
														<td>t.nixon@datatables.net</td>
													</tr>
													<tr>
														<td>2</td>
															<td><a href="{{url('/view-member-info')}}">Garrett</a></td>
														<td>123465</td>
														<td>Password</td>
														<td>2011/04/25</td>
														<td>61</td>
														<td>CHENNAI</td>
														<td>5421</td>
														<td>t.nixon@datatables.net</td>
													</tr>

												</tbody>
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