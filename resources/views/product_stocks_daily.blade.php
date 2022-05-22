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
							Product Stock Details Daily
						</li>
					</ol>
				</div>
			</div><!-- row -->
			<div class="row">
				<div class="col-sm-12">
					<div class="portlet">
						<div class="portlet-heading bg-success">
							<h3 class="portlet-title 	">
								Product Stock Details Daily
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
														<th>DATE</th>		
														<th>PRODUCT NAME & GRAM</th>
														<th>STOCK PRODUCT</th>	 
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>{{\Carbon\Carbon::now()->format('d-m-Y')}}</td>
														<td><a href="javascript:void(0)" onclick="showTable()">TURMERIC POWDER -100g</a></td>
															<td>100</td>

														</tr>
														<tr>
															<td>2</td>
															<td>{{\Carbon\Carbon::now()->format('d-m-Y')}}</td>
															<td><a href="javascript:void(0)" onclick="showTable()">TURMERIC POWDER -150g</a></td>
															<td>100</td>

														</tr>

													</tbody>


												</table>
											</div>
										</div>
									</div>

								</div>{{-- port body --}}
								<table id="datatables"
								class="table table-striped table-bordered nowrap hide" cellspacing="0"
								width="100%">
								<thead>
									<tr>
										<th>SNO</th>					 
										<th>DATE</th>		
										<th>PRODUCT NAME & GRAM</th>
										<th>PURCHASE PRODUCT</th>	 
										<th>OLD STOCK</th>	 
										<th>TOTAL PRODUCT</th>	 
										<th>STOCK PRODUCT</th>	
										<th>SOLD PRODUCT</th>	 
									</tr>
								</thead>
								<tbody>
									<tr>
										<td>1</td>
										<td>{{\Carbon\Carbon::now()->format('d-m-Y')}}</td>
										<td> TURMERIC POWDER -100g</td>
											<td>500</td>
											<td>-</td>
											<td>500</td>
											<td>400</td>
											<td>100</td>
										</tr>

									</tbody>


								</table>




							</div>{{-- panel-collapse --}}
						</div>{{-- portlet --}}
					</div>
				</div>


			</div> <!-- container -->
		</div> <!-- content -->
	</div> <!-- content-page -->

	@endsection		