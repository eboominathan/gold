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
							Downline Members Sales Details 
						</li>
					</ol>
				</div>
			</div><!-- row -->
			<div class="row">
				<div class="col-sm-12">
					<div class="portlet">
						<div class="portlet-heading bg-success">
							<h3 class="portlet-title 	">
								Downline Members Sales Details 
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
									{{-- 		<table cellpadding="10" class="table">
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
													 
												</table> --}}


												<div class="clearfix"></div>

												<table id="datatable"
												class="table table-striped table-bordered nowrap" cellspacing="0"
												width="100%">
												<thead>
													<tr>
														<th>SNO</th>					 
														<th>DATE</th>					 
														<th>SALEPOINT ID NO</th>
												{{-- 		@if(!Request::get('monthly'))	 --}}
														<th>SPONSOR ID NO</th>		
														<th>MEMBER ID NO</th>	
														{{-- @endif	 --}}
														<th>PRODUCT VALUE</th>
														<th>TAXABLE AMOUNT</th>
														<th>NET PAY AMOUNT </th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td> 29-05-2022</td>
														<td> 13132</td>
													 {{-- 	@if(!Request::get('monthly'))	 --}}
														<td>1200</td>
														<td>123</td>
														{{-- @endif --}}
														<td>123</td>
														<td>123</td>
														<td>10000</td>
													</tr>
													<tr>
														<td>2</td>
														<td> 29-05-2022</td>
														<td> 13135 </td>
													 
													@if(!Request::get('monthly'))	
														<td>1200</td>
														<td>123</td>
														@endif
														<td>123</td>
														<td>123</td>
														<td>10000</td>
														@if(Request::get('monthly'))	
														<td></td>
														<td></td>
														@endif
													</tr>
													
												</tbody>
												<tfoot>
													<tr>
														<td>&nbsp;</td>
														<td>&nbsp;</td>
														<td>&nbsp;</td>
														<td>&nbsp;</td>
														<td>&nbsp;</td>
														<td>&nbsp;</td>
													 
														<td>Total</td>
														<td>20000</td>
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