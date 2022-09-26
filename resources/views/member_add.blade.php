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
							<a href="{{url('/members')}}">Members</a>
						</li>
						<li class="active">
							Add  Member Information
						</li>
					</ol>
				</div>
			</div><!-- row -->
			<div class="row">
				<div class="col-sm-12">
					<div class="portlet">
						<div class="portlet-heading bg-success">
							<h3 class="portlet-title 	">
								Member Information
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
									@if (\Session::has('message'))
									<div class="alert alert-success">
										{!! \Session::get('message') !!} 

									</div>
									@endif
									@if (\Session::has('error'))
									<div class="alert alert-danger">         
										{!! \Session::get('error') !!}             
									</div>
									@endif


								@if($errors->count())
								@foreach ($errors->all() as $error)
								<div class="alert alert-danger">{{ $error }}</div>
								@endforeach
								@endif



									<form  role="form" id="application_form" method="post" action="{{url('/member/store-member')}}">
										@csrf()
										<div class="form-group">
											<div class="col-md-6">
												<label class="control-label">Name <span class="red">*</span></label>
												<input type="text" class="form-control"   name="name" id="name" placeholder="Enter Name" >
												<span class="help-block"></span>
											</div>
										</div>
										<div class="form-group">	
											<div class="col-md-6">
												<label class="control-label">Date</label>

												<input type="text" class="form-control datepicker"  id="datepicker" name="date" readonly required>


											</div>
										</div>
										<div class="clearfix"></div> 
										<div class="form-group">	
											<div class="col-md-6">
												<label class="control-label">Date Of Birth</label>									 
												<input type="text" class="form-control datepicker" name="dob" readonly required>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6">
												<label class="control-label">Age </label>
												<input type="text" class="form-control" value="" name="age" id="age" placeholder="Enter Age">
												<span class="help-block"></span>
											</div>
										</div>
										
										<div class="form-group">
											<div class="col-md-6">
												<label class="control-label">Gender </label>
												<select class="form-control" name="gender">
													<option value="">Selct Gender</option>
													<option value="Male">Male</option>
													<option value="Female">Female</option>
													<option value="TransGender">TransGender</option>
												</select>
												<span class="help-block"></span>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6">
												<label class="control-label">Address </label>
												<textarea class="form-control" name="address"></textarea>
												<span class="help-block"></span>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6">
												<label class="control-label">Pincode </label>
												<input class="form-control" name="pincode"> 
												<span class="help-block"></span>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6">
												<label class="control-label">City </label>
												<input class="form-control" name="city" > 
												<span class="help-block"></span>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6">
												<label class="control-label">State </label>
												<input class="form-control" name="state"> 
												<span class="help-block"></span>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6">
												<label class="control-label">Mobile Number </label>
												<input class="form-control" name="mobile"> 
												<span class="help-block"></span>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6">
												<label class="control-label">Email</label>
												<input class="form-control" name="email" type="email" required > 
												<span class="help-block"></span>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6">
												<label class="control-label">Aadhar Number</label>
												<input class="form-control" name="aadhaar_no"> 
												<span class="help-block"></span>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<h3><b>Bank Details</b></h3>
												<hr>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6">
												<label class="control-label">Account holder Name</label>
												<input class="form-control" name="acc_holder_name"> 
												<span class="help-block"></span>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6">
												<label class="control-label">Account Number</label>
												<input class="form-control" name="acc_no"> 
												<span class="help-block"></span>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6">
												<label class="control-label">IFSC Code</label>
												<input class="form-control" name="ifsc_code"> 
												<span class="help-block"></span>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6">
												<label class="control-label">Branch</label>
												<input class="form-control" name="branch_name"> 
												<span class="help-block"></span>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6">
												<label class="control-label">Bank Name</label>
												<input class="form-control" name="bank_name"> 
												<span class="help-block"></span>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<h3><b>PIN NUMBER</b></h3>
												<hr>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6">
												<label class="control-label">Sno</label>
												<input class="form-control" name="s_no"> 
												<span class="help-block"></span>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6">
												<label class="control-label">PIN No</label>
												<input class="form-control" name="pin_no"> 
												<span class="help-block"></span>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6">
												<label class="control-label">Sponsor ID No</label>
												<input class="form-control" name="sponsor_id"> 
												<span class="help-block"></span>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-12">
												<h3><b>Nominee Information</b></h3>
												<hr>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6">
												<label class="control-label">Nominee Name</label>
												<input class="form-control" name="nominee_name"> 
												<span class="help-block"></span>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6">
												<label class="control-label">Nominee Relationship</label>
												<input class="form-control" name="nominee_reltnshp"> 
												<span class="help-block"></span>
											</div>
										</div>
										<div class="form-group">
											<div class="col-md-6">
												<label class="control-label">Password</label>
												<input class="form-control" type="password" name="password" required> 
												<span class="help-block"></span>
											</div>
										</div>
										

										<div class="clearfix"></div><br>

										<div class="form-group text-center m-b-0">
											<button class="btn btn-primary waves-effect waves-light" type="submit">
												Save
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

		</div> <!-- container -->
	</div> <!-- content -->
</div> <!-- content-page -->
@endsection