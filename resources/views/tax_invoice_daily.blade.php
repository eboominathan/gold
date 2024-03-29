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
							Tax Invoice Daily
						</li>
					</ol>
				</div>
			</div><!-- row -->
			<div class="row">
				<div class="col-sm-12">
					<div class="portlet">
						<div class="portlet-heading bg-success">
							<h3 class="portlet-title 	">
								Tax Invoice Daily
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
														<th>SPONSOR ID NO</th>
														<th>MEMBER ID No</th>
														<th>PURCHASE DATE</th>
														<th>PRODUCT QUANTITY</th>
														<th>PRODUCT VALUE</th>
														<th>TAXABLE AMOUNT</th>
														<th>NET PAY AMOUNT </th>				
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>13132</td>
														<td>46546</td>
														<td><a href="{{url('/purchse-tax-invoice')}}">1235</a></td>
														<td>18-05-2022</td>
														<td>5</td>
														<td>1200</td>
														<td>123</td>
														<td>10000</td>
													</tr>
													<tr>
														<td>2</td>
														<td>13133</td>
														<td>6546</td>
														<td><a href="{{url('/purchse-tax-invoice')}}">1231</a></td>
														<td>18-05-2022</td>
														<td>5</td>
														<td>1200</td>
														<td>123</td>
														<td>10000</td>
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