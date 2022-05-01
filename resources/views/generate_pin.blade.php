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
							<a href="javascript:void(0);">Pin Bank</a>
						</li>
						<li class="active">
							Generate Pin
						</li>
					</ol>
				</div>
			</div><!-- row -->

			<div class="row">
				<div class="col-sm-12">
					<div class="portlet">
						<div class="portlet-heading bg-success">
							<h3 class="portlet-title 	">
								Generate Pin
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
								<div class="card-box table-responsive">
									<form class="form-horizontal" role="form" id="pin_generate_form">

										<div class="form-group">
											<label class="control-label col-md-3">Total No of Pin <span class="red">*</span></label>
											<div class="col-md-7">
												<input type="text" class="form-control" value="" name="total_pin" id="total_pin" placeholder="Enter Total Number of Pin">
												<span class="help-block"></span>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-3">ID No <span class="red">*</span></label>
											<div class="col-md-7">
												<input type="text" class="form-control" value="" name="id_no" id="id_no" placeholder="Enter ID No">
												<span class="help-block"></span>
											</div>
										</div>
										<div class="form-group text-center m-b-0">
											<button class="btn btn-primary waves-effect waves-light" type="submit">
												Submit
											</button>
											<button type="reset" class="btn btn-danger waves-effect waves-light m-l-5">
												Cancel
											</button>
										</div>


									</form> 

								</div>
							</div>{{-- port body --}}
						</div>{{-- panel-collapse --}}
					</div>{{-- portlet --}}
				</div>
			</div>




			<div class="row">
				<div class="col-sm-12">
					<div class="portlet">
						<div class="portlet-heading bg-success">
							<h3 class="portlet-title">
								Pin Details
							</h3>
							<div class="portlet-widgets">
								<a href="javascript:;" data-toggle="reload"><i class="ion-refresh"></i></a>
								<span class="divider"></span>
								<a data-toggle="collapse" data-parent="#accordion1" href="#pin_table"><i class="ion-minus-round"></i></a>
								<span class="divider"></span>
								<a href="#" data-toggle="remove"><i class="ion-close-round"></i></a>
							</div>
							<div class="clearfix"></div>
						</div>
						<div id="pin_table" class="panel-collapse collapse in">
							<div class="portlet-body">
								<div class="card-box table-responsive">
									{{-- <h4 class="m-t-0 header-title"><b>Pin Bank</b></h4> --}}
									<form  role="form" id="pin_generate_search_form">
										<div class="form-group">
											<label class="control-label col-md-1">ID No</label>
											<div class="col-md-4">
												<input type="text" class="form-control" value="" name="total_pin" id="total_pin" placeholder="Enter ID No">
												<span class="help-block"></span>
											</div>
										</div>
										<div class="form-group">
											<label class="control-label col-md-1">Pin No</label>
											<div class="col-md-4">
												<input type="text" class="form-control"  name="total_pin" id="total_pin" placeholder="Enter Pin">
												<span class="help-block"></span>
											</div>
										</div>
									</form>
									<div class="clearfix"></div><br>
									<table id="datatable" class="table table-striped table-bordered">
										<thead>
											<tr>
												<th>SNO</th>
												<th>PIN NUMBER</th>
												<th>SERIAL NUMBER</th>
												<th>ACTIVE</th>
												<th>GENERATED ID NO</th>           
												<th>USED ID NO</th>                                    
												<th>PIN USED DATE</th>
												<th>Action</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td>1</td>
												<td>PN12345678</td>
												<td>SN12345678</td>
												<td>
													<div class="">
														<input type="checkbox" checked="" data-plugin="switchery" data-color="#f05050" data-size="small" data-switchery="true" style="display: none;"><span class="switchery switchery-small" style="background-color: rgb(129, 200, 104); border-color: rgb(129, 200, 104); box-shadow: rgb(129, 200, 104) 0px 0px 0px 16px inset; transition: border 0.4s ease 0s, box-shadow 0.4s ease 0s, background-color 1.2s ease 0s;"><small style="left: 20px; background-color: rgb(255, 255, 255); transition: background-color 0.4s ease 0s, left 0.2s ease 0s;"></small></span>


													</div>
												</td>
												<td>#123456</td>
												<td>#123456</td>
												<td>{{ \Carbon\Carbon::now()->format('d-m-Y') }}</td>
												<td>
													
													<button class="btn-sm btn-primary">Edit</button>
													<button class="btn-sm btn-danger">Delete</button>
												</td>
											</tr>
										</tbody>
									</table>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>



		</div> <!-- container -->

	</div> <!-- content -->

	<footer class="footer">
		© 2022. All rights reserved.
	</footer>

</div>
<!-- ============================================================== -->
<!-- End Right content here -->
<!-- ============================================================== -->


@endsection