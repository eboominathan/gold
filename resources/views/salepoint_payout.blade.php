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
							SalePoint Payout
						</li>
					</ol>
				</div>
			</div><!-- row -->
			<div class="row">
				<div class="col-sm-12">
					<div class="portlet">
						<div class="portlet-heading bg-success">
							<h3 class="portlet-title 	">
								SalePoint Payout 
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
														<label class="control-label"> From Date  </label>
													</td>
													<td>
														<input type="text" class="form-control datepicker" readonly="">
														<span class="help-block">
														</td>
														 

													<td>
														<label class="control-label"> To Date  </label>
													</td>
													<td>
														<input type="text" class="form-control datepicker" readonly="">
														<span class="help-block">
														</td>
														<td>
															<button class="btn btn-primary">Get Info</button>
														</td>
													</tr>
													 
												</table>


												<div class="clearfix"></div>
												<table  
												class="table table-striped table-bordered nowrap" cellspacing="0"
												width="100%">
												<thead>
													<tr>
														<th>SNO</th>					 
														<th>SALEPOINT ID NO</th>		
														<th>NAME</th>		
														<th>DIRECT DOWNLINE PURCHASE AMOUNT</th>
														<th>DIRECT DOWNLINE PURCHASE COMMISION</th>
														<th>DOWNLINE PURCHASE AMOUNT</th>
														<th>DOWNLINE PURCHASE COMMISION</th>
														<th>TOTAL COMMISION EARNED</th>
														<th>TDS (%)</th>
														<th>SERVICE CHARGES (%)</th>
														<th>OTHERS(%)</th>
														<th>TOTAL CHARGES</th>
														<th>SUB TOTAL</th>
														<th>ROUND OFF</th>
														<th>NET PAY</th>		 
														<th><label for="select">Select All</label> <input type="checkbox" name="" id="select"   onclick="checkAll()"> </th>
														<th>ACTION</th>
														
													</tr>
												</thead>
												<tbody>
													<tr>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
										 
														<td><input type="checkbox" name="" class="checked"></td>
														<td><button class="btn btn-info btn-xs"><i class="fa fa-eye"></i> View</button></td>
													 
													 
													</tr>
													<tr>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
										 
														<td><input type="checkbox" name="" class="checked"></td>
														<td><button class="btn btn-info btn-xs"><i class="fa fa-eye"></i> View</button></td>			 
													 		 
													 
													</tr>
												<tfoot>
													<tr>
														<td colspan="3" align="center"><b>TOTAL</b></td>
													 
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>
														<td></td>		 
														<td></td>		 
														<td></td>		 
														<td></td>		 
														<td></td>		 
														<td></td>		 
														<td></td>		 
														<td></td>		 
													 
													</tr>	
													 
												</tfoot>
													
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