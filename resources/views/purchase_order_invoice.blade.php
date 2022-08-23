  {{-- <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" /> --}}
 
<table>
	<tr>
		<th><img src="{{asset('assets/images/header-logo.png')}}" style="width: 325px;"></th>
		<th><h2>GOLD  HERBAL CARE </h2></th>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
	</tr>
	<tr>
		<th></th>
		<th>Sample Street Madurai-01 ,+91 9876542130 ,test@herbal.care,https://www.goldenherbalcare.com</th>
		<th></th>
	</tr>
</table>


 @if(Request::get('monthly'))
 	
 	<hr>
 	<div align="center">
 	From <input type="text" class="form-control datepicker" readonly=""> To <input type="text" class="form-control datepicker" readonly="">
 	<input type="submit" name="" value="Submit">
 	</div>
 	<hr>

 @endif 
<table  width="100%"  cellpadding="10">
		<tr>
			@if(!Request::get('monthly'))
		<th align="left">Invoice Date :  {{\Carbon\Carbon::now()->format('d-m-Y') }} </th>
		<th align="left"></th>
		@else
		<th align="left">Order Month : {{\Carbon\Carbon::now()->format('M') }}</th>
		<th align="left"></th>
		@endif
		<th><h2>ORDER INVOICE  @if(Request::get('monthly')) MONTHLY @endif</h2></th>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		@if(Request::get('monthly'))
			<th align="right">Sponsor ID No: #123465</th>
		<th align="left"></th>
		@else
			<th align="right">Order Invoice No: #123465</th>
		<th align="left"></th>
		@endif
	</tr>


	<tr>@if(!Request::get('monthly'))
		<th align="left">Invoice No  :#65465 </th>
		<th align="left"></th>
		@else
		<th align="left">Purchased By : Sanjay </th>
		<th align="left"></th>
		@endif
		<th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		@if(Request::get('monthly'))
			<th align="right">Salepoint ID No: #123465</th>
		<th align="left"></th>
		@else
			<th align="right">Order No: #123465</th>
		<th align="left"></th>
		@endif
	</tr>
	<tr>
		@if(!Request::get('monthly'))
		<th align="left">Order Date :  {{\Carbon\Carbon::now()->format('d-m-Y') }} </th>
		<th align="left"></th>
		@else
		<th align="left">Salepoint Id No</th>
		<th align="left"></th>
		@endif
		<th> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		@if(Request::get('monthly'))
			<th align="right">Order No: #123465</th>
		<th align="left"></th>
		@else
			<th align="right">Order Channel: #123465</th>
		<th align="left"></th>
		@endif
	</tr>
	<tr>
		@if(!Request::get('monthly'))
		<th align="left">Order Month : {{\Carbon\Carbon::now()->format('M') }}</th>
		<th align="left"></th>
		@else
		<th align="left">Sale Point Name & Address: Sanjay , Madurai</th>
		<th align="left"></th>
		@endif
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		@if(Request::get('monthly'))
		
		@else
			<th align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left"></th>
		@endif
	</tr>
	@if(!Request::get('monthly'))
	<tr>
		<th align="left">Purchased By : Sanjay</th>
		<th align="left"></th>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		@if(Request::get('monthly'))
		
		@else
			<th align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="left"></th>
		@endif
	</tr>

	<tr>
		<th align="left">Sale Point ID No : SP0001</th>
		<th align="left"></th>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th align="right"></th>
		<th align="left"></th>
	</tr>
	<tr>
		<th align="left">Sale Point Name & Address: Sanjay , Madurai</th>
		<th align="left"></th>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th align="right"></th>
		<th align="left"></th>
	</tr>
	@endif
	<tr>
		<th align="left">Phone No : 9876541230</th>
		<th align="left"></th>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th align="right"></th>
		<th align="left"></th>
	</tr>

</table>
<table  cellspacing="0" width="100%" border="1" style="border-collapse: collapse;" cellpadding="10">
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
	<tr>
		<td>2</td>
	 
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
	<tr>
		<td>3</td>
	 
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
	<tr>
		<td>4</td>
	 
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
	<tr>
		<td>5</td>
 
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
 
	<tr>
		<td>-</td>
	 
		<td>-</td>
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
		<td><b>Rs.10000</b></td>
	</tr>
	
 
 
	<tr style="border-top: none;">
	 
		<td style="border:none"></td>
		<td style="border:none"></td>
		<td style="border:none">&nbsp;&nbsp;</td>
		<td style="border:none">&nbsp;&nbsp;</td>
		<td style="border:none">&nbsp;&nbsp;</td>
		<td style="border:none">&nbsp;&nbsp;</td>
		<td style="border:none">&nbsp;&nbsp;</td>
		<td style="border:none">&nbsp;&nbsp;</td>
		<td style="border:none">&nbsp;&nbsp;</td>
		<td style="border:none">&nbsp;&nbsp;</td>
		<td style="border:none">&nbsp;&nbsp;</td>
		<td style="border:none">&nbsp;&nbsp;</td>
		<td align="right"><b>Round Off</b></td>
		<td ><b>Rs. 150</b></td>
	</tr>
	<tr>
		<td style="border:none"></td>
	 
		<td style="border:none"></td>
		<td style="border:none">&nbsp;&nbsp;</td>
		<td style="border:none">&nbsp;&nbsp;</td>
		<td style="border:none">&nbsp;&nbsp;</td>
		<td style="border:none">&nbsp;&nbsp;</td>
		<td style="border:none">&nbsp;&nbsp;</td>
		<td style="border:none">&nbsp;&nbsp;</td>
		<td style="border:none">&nbsp;&nbsp;</td>
		<td style="border:none">&nbsp;&nbsp;</td>
		<td style="border:none">&nbsp;&nbsp;</td>
		<td style="border:none">&nbsp;&nbsp;</td>
		<td align="right"><b>NETPAY</b></td>
		<td ><b>Rs. 15000</b></td>
	</tr>

</table>
<br>
	<div align="center" onclick="window.print()">
<button class="btn btn-primary" align="center">Print</button>
</div>
@include('layouts.footer')