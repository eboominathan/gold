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
						<li class="active">
							<a href="javascript:void(0);">SalePoint</a>
						</li>
						<li class="active">
							SalePoint Purchasing Order
						</li>
					</ol>
				</div>
			</div><!-- row -->
			<div class="row">
				<div class="col-sm-12">
					<div class="portlet">
						<div class="portlet-heading bg-success">
							<h3 class="portlet-title 	">
								SalePoint Purchasing Order
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
									<div class="col-md-4 pull-right">
										<label>Purchase Order Number</label>
										<select class="form-control">
											<option value="">Select</option>
											<option value="GH1001">GH1001</option>
											<option value="GH1002">GH1002</option>
										</select>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-6 ">
										<label>PURCHASED BY</label>
										NAME
									</div>
									<div class="col-md-6 ">
										<label>ORDER CHANNEL</label>
										CHANNEL
									</div>
									<div class="col-md-6 ">
										<label>SALEPOINT ID NO</label>
										#123
									</div>
									<div class="col-md-6 ">
										<label>SALEPOINT NAME & ADDRESS</label>
										SANJAY ,
										SAMPLE STREET ,MADURAI
									</div>
								</div>
								<div class="row">
									<div class="col-sm-12">
										<div class="card-box table-responsive">
																		 
											<div class="clearfix"></div>									 

											<table id="datatable-responsive"
											class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
											width="100%">
											<tr>
												<th>SNO</th>
												<th>Description</th>
												<th>Quantity</th>
												<th>Rate</th>
												<th>Value</th>
												<th>Discount (%)</th>
												<th>Discount (Amount)</th>
												<th>Taxable</th>
												<th>CGST (%)</th>
												<th>CGST (Amount)</th>
												<th>SGST (%)</th>
												<th>SGST (Amount)</th>
												<th>TOTAL GST Amount</th>
												<th>TOTAL Amount</th>
											</tr>
											<tbody id="purchase">
												<tr>
													<td>1</td>
													<td>Description</td>
													<td>123</td>
													<td>123</td>
													<td>123</td>
													<td>123</td>
													<td>123</td>
													<td>123</td>
													<td>123</td>
													<td>123</td>
													<td>123</td>
													<td>123</td>
													<td>123</td>
													<td><b>Rs.1000</b></td>
												</tr>
											</tbody>
											 </table>
											<div class="form-group text-center m-b-0">
											<a href="{{url('/purchse-order-invoice')}}" class="btn btn-primary waves-effect waves-light" type="submit">
												Submit
											</a>
										 
										</div>
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

