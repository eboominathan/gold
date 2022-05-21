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
							Purchase Sales Stock Details Daily
						</li>
					</ol>
				</div>
			</div><!-- row -->
			<div class="row">
				<div class="col-sm-12">
					<div class="portlet">
						<div class="portlet-heading bg-success">
							<h3 class="portlet-title 	">
								Purchase Sales Stock Details Daily
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
													 
												</table>


												<div class="clearfix"></div>

												<table id="datatable"
												class="table table-striped table-bordered nowrap" cellspacing="0"
												width="100%">
												<thead>
													<tr>
														<th>SNO</th>					 
														<th>SALEPOINT ID No</th>		
														<th>PURCHASE DATE</th>		
														<th>PRODUCT PURCHASE QUANTITY</th>
														<th>OLD STOCK</th>
														<th>TOTAL PRODUCTS</th>
														<th>SOLD PRODUCTS</th>
														<th>STOCK PRODUCTS</th>
														<th>PRODUCT PURCHASE AMOUNT</th>
														<th>OLD STOCK AMOUNT</th>
														<th>TOTAL PRODUCTS AMOUNT</th>
														<th>SOLD AMOUNT</th>
														<th>STOCK BALANCE AMOUNT</th>
													 
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td><a href="{{url('/purchase-sale-stock-list-daily-view')}}">13132</a></td>
													 
														<td>{{\Carbon\Carbon::now()->format('d-m-Y')}}</td>
														<td>200</td>
														<td>-</td>
														<td>200</td>
														<td>70</td>
														<td>130</td>
														<td>12158</td>
														<td>-</td>
														<td>12158</td>
														<td>12158</td>
														<td>8020</td>
													</tr>
													<tr>
														<td>2</td>
														<td><a href="{{url('/purchase-sale-stock-list-daily-view')}}">13132</a></td>
													 
														<td>{{\Carbon\Carbon::now()->format('d-m-Y')}}</td>
														<td>200</td>
														<td>-</td>
														<td>200</td>
														<td>70</td>
														<td>130</td>
														<td>12158</td>
														<td>-</td>
														<td>12158</td>
														<td>12158</td>
														<td>8020</td>
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