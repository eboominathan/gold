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
							  Downline Members Details
						</li>
					</ol>
				</div>
			</div><!-- row -->
			<div class="row">
				<div class="col-sm-12">
					<div class="portlet">
						<div class="portlet-heading bg-success">
							<h3 class="portlet-title 	">
							  Downline Members Details
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
										 
													<table id="datatable-responsive"
													class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
													width="100%">
													<thead>
														<tr>
															<th>SNO</th>
															<th>DATE</th>
															<th> ID NO</th>
															<th>NAME & ADDRESS</th>
															<th >CITY</th>
															<th>PhoneNo</th>
														</tr>
													</thead>
													<tbody>
														<tr>
															<td>1</td>
															<td>01-05-2022</td>
															<td><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="{{url('/view-downline-members')}}" data-original-title="Total Downline Members : 10">SPON15486</a></td>
															<td><a href="{{url('/view-member-info')}}">Nixon CHENNAI</a></td>
															<td>CHENNAI</td>
															<td>1235489</td>
														</tr>
														<tr>
															<td>2</td>
															<td>01-05-2022</td>
															<td><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="{{url('/view-downline-members')}}" data-original-title="Total Downline Members : 8">SPON15487</a></td>
															<td><a href="{{url('/view-member-info')}}">Garett CHENNAI</a></td>
															<td>CHENNAI</td>
															<td>1235489</td>
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