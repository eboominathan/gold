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
					 Downline Member Purchase Details
						</li>
					</ol>
				</div>
			</div><!-- row -->
			<div class="row">
				<div class="col-sm-12">
					<div class="portlet">
						<div class="portlet-heading bg-success">
							<h3 class="portlet-title 	">
								 DOWNLINE MEMBER PURCHASE DETAILS
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
														<input type="text" class="form-control monthpicker" readonly="">
														<span class="help-block">
														</td>
														<td>
															<button class="btn btn-primary">Get Info</button>
														</td>
													</tr>
													 
												</table>


												<div class="clearfix"></div>

												<table id="datatable"
												class="table table-striped table-bordered nowrap" cellspacing="0"
												width="100%">
												<thead>
													<tr>
														<th>SNO</th>					 
														<th>DATE</th>	
														<th>SPONSOR ID No</th>		
														<th>MEMBER ID No</th>		
														<th>NAME</th>		
														<th>PRODUCT PURCHASE AMOUNT</th>
														<th>Action</th>					
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>18-05-2022</td>			 
														
														<td>13246</td>
														<td><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="{{url('/view-downline-members-purchase')}}" data-original-title="Total Downline Members : 10">GH001010</a></td>
														<td></td>
														<td></td>
												 
															<td><a href="{{ url('/view-purchase-details')}}" class="btn btn-info btn-xs"><i class="fa fa-eye"></i> View</a></td>
													</tr>
													<tr>
														<td>2</td>
														<td>18-05-2022</td>			 
														
														<td>654</td>
														<td><a title="" data-placement="top" data-toggle="tooltip" class="tooltips" href="{{url('/view-downline-members-purchase')}}" data-original-title="Total Downline Members : 5">GH001015</a></td>
														<td></td>
														<td></td>
															<td><button class="btn btn-info btn-xs"><i class="fa fa-eye"></i> View</button></td>
													</tr>
													</tr>
													
												</tbody>
												<tfoot>
													<tr>
														<td></td>
														<td></td>			 
														<td></td>
														<td></td>
														<td></td>
														<td>TOTAL</td>
														<td></td>
													</tr>
												</tfoot>
											 
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