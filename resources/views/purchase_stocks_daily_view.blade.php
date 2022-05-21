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
											<label>SALEPOINT ID NO : 0001001</label> <br>
											<label>DATE : 18-05-2022</label>


												<div class="clearfix"></div>

												<table id="datatable"
												class="table table-striped table-bordered nowrap" cellspacing="0"
												width="100%">
												<thead>
													<tr>
														<th>SNO</th>				 	
														<th>PRODUCT DESCRIPTION</th>
														<th>PRODUCT PURCHASE QUANTITY</th>
														<th>PRODUCT RATE</th>
														<th>DISCOUNT (%)</th>
														<th>DISCOUNT (AMOUNT)</th>
														<th>TAXABLE</th>
														<th>TOTAL GST (%)</th>
														<th>TOTAL GST AMOUNT</th>
														<th>PRODUCT PURCHASE AMOUNT</th>
														<th>OLD STOCK</th>
														<th>DISCOUNT (%)</th>
														<th>DISCOUNT (AMOUNT)</th>
														<th>TAXABLE</th>
														<th>TOTAL GST (%)</th>
														<th>TOTAL GST AMOUNT</th>
														<th>OLD STOCK AMOUNT</th>
														<th>TOTAL PRODUCTS</th>
														<th>TOTAL PRODUCTS AMOUNT</th>					 
													</tr>
												</thead>
												<tbody>
													<tr>
														<td>1</td>
														<td>DESC</td>					 
														<td>2</td>
														<td>200</td>
														<td>7650</td>
														<td>5</td>
														<td>3250</td>
														<td>726</td>
														<td>6</td>
														<td>152</td>
														<td>-</td>
														<td>-</td>
														<td>-</td>
														<td>-</td>
														<td>-</td>
														<td>-</td>
														<td>-</td>
														<td>-</td>
														<td>-</td>
														 
													</tr>
													<tr>
														<td>2</td>
														<td>DESC</td>					 
														<td>2</td>
														<td>200</td>
														<td>7650</td>
														<td>5</td>
														<td>3250</td>
														<td>726</td>
														<td>6</td>
														<td>152</td>
														<td>-</td>
														<td>-</td>
														<td>-</td>
														<td>-</td>
														<td>-</td>
														<td>-</td>
														<td>-</td>
														<td>-</td>
														<td>-</td>
													 
													</tr>
													
												</tbody>
												<tfoot>
													<tr>
														<td>TOTAL</td>
														<td>-</td>					 
														<td>2</td>
														<td>200</td>
														<td>7650</td>
														<td>5</td>
														<td>3250</td>
														<td>726</td>
														<td>6</td>
														<td>152</td>
														<td>1</td>
														<td>2</td>
														<td>3</td>
														<td>4</td>
														<td>5</td>
														<td>6</td>
														<td>7</td>
														<td>8</td>
														<td>9</td>
													 
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