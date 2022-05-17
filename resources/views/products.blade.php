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
							<a href="javascript:void(0);">Products</a>
						</li>
						<li class="active">
							Product Details
						</li>
					</ol>
				</div>
			</div><!-- row -->
			<div class="row">
				<div class="col-sm-12">
					<div class="portlet">
						<div class="portlet-heading bg-success">
							<h3 class="portlet-title 	">
								Product Details
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

											<a href="#custom-modal" class="btn btn-primary waves-effect waves-light add" >Add Product</a>
											<br>
											<br>
											<div class="clearfix"></div>									 

											<table id="datatable-responsive"
											class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
											width="100%">
											<thead>
												<tr>
													<th>SNO</th>
													<th>NAME</th>
													<th>GRAM</th>
													<th>RATE</th>
													<th>DISCOUNT(%)</th>					
													<th>Action</th>					
												</tr>
											</thead>
											<tbody>
												<tr>
													<td>1</td>
													<td>Herbal</td>
													<td>100</td>
													<td>160</td>
													<td>10</td>				
													<td>
														<button class="btn btn-primary btn-sm waves-effect">Edit
														</button>
														<button class="btn btn-danger btn-sm waves-effect">Delete
														</button>
													</td>				
												</tr>
												<tr>
													<td>2</td>
													<td>Herbal</td>
													<td>100</td>
													<td>160</td>
													<td>10</td>	
													<td>
														<button class="btn btn-primary btn-sm waves-effect">Edit
														</button>
														<button class="btn btn-danger btn-sm waves-effect">Delete
														</button>
													</td>				
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

<div id="con-close-modal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
	<div class="modal-dialog"> 
		<div class="modal-content"> 
			<div class="modal-header"> 
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button> 
				<h4 class="modal-title">Add Product</h4> 
			</div> 
			<div class="modal-body"> 
				<div class="row"> 
					<div class="col-md-12"> 
						<div class="form-group"> 
							<label for="field-1" class="control-label">PRODUCT NAME</label> 
							<input type="text" class="form-control" id="field-1" > 
						</div> 
					</div> 					  
				</div> 
				<div class="row"> 
					<div class="col-md-12"> 
						<div class="form-group"> 
							<label for="field-3" class="control-label">GRAM</label> 
							<input type="text" class="form-control" id="field-3" > 
						</div> 
					</div> 
				</div> 
				<div class="row"> 
					<div class="col-md-12"> 
						<div class="form-group"> 
							<label for="field-4" class="control-label">RATE</label> 
							<input type="text" class="form-control" id="field-4" > 
						</div> 
					</div> 
				</div> 
				<div class="row"> 
					<div class="col-md-12"> 
						<div class="form-group"> 
							<label for="field-5" class="control-label">DISCOUNT (%)</label> 
							<input type="text" class="form-control"  > 
						</div> 
					</div>  
				</div> 
			</div> 
			<div class="modal-footer"> 
				<button type="button" class="btn btn-danger waves-effect" data-dismiss="modal">Close</button> 
				<button type="button" class="btn btn-primary waves-effect">Save changes</button> 
			</div> 
		</div> 
	</div>
</div><!-- /.modal -->



@endsection

