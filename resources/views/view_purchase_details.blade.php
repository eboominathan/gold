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
								Downline Member Purchase  Details  
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
									   
												<table  
												class="table table-striped table-bordered nowrap" cellspacing="0"
												width="100%">
												<thead>
													<tr>
														<th>SNO</th>					 
														<th>DATE</th>		
														<th>ID NO</th>		
														<th>PRODUCT DESCRIPTION</th>
														<th>PRODUCT QUANTITY</th>
														<th>PRODUCT RATE</th>
														<th>PRODUCT VALUE</th>
														<th>DISCOUNT(%)</th>
														<th>DISCOUNT(AMOUNT)</th>
														<th>TAXABLE</th>
														<th>CGST</th>
														<th>CGST(AMOUNT)</th>
														<th>SGST</th>
														<th>SGST(AMOUNT)</th>
														<th>TOTAL GST(AMOUNT)</th>
														<th>TOTAL AMOUNT</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>{{\Carbon\Carbon::now()->format('d-m-Y')}}</td>		 
														<td>#1335</td>
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
													<tr>
														<td>2</td>
														<td>{{\Carbon\Carbon::now()->format('d-m-Y')}}</td>
												 
														<td>#1336</td>
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
												<tfoot>
													<tr>
														<td colspan="4" align="center"><b>TOTAL</b></td>
													 
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
													<tr>
														<td colspan="14"></td>
														<td><b>ROUND OFF</b></td>
														<td></td>		 
													 
													</tr>
										  
													<tr>
														<td colspan="14"></td>
														<td><b>NET PAY</b></td>
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