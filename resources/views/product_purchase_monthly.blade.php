<table  	>
	<tr>
		<th><img src="{{asset('assets/images/header-logo.png')}}" style="width: 325px;"></th>
		<th><h2>Gold Herbal Care </h2></th>
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
 	From 01-05-2022 12:00:00 AM to 31-05-2022 12:00:00 AM 
 	</div>
 	<hr>

 @endif 
<table  width="100%" >
	<tr>
		 @if(!Request::get('members'))
			<th align="left">Invoice Date :  {{\Carbon\Carbon::now()->format('d-m-Y') }} </th>		 
		@else
			<th align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>	 
		@endif
		<th><h2>PRODUCT PURCHASE MONTHLY STATEMENT </h2></th>	 
	 	<th align="right">Date: {{\Carbon\Carbon::now()->format('d-m-Y') }}</th> 
	</tr>
	<tr>
		 @if(!Request::get('monthly'))
			<th align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>	 
			@else
				<th align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>			 
			@endif
	 	
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th align="right">Sponsor ID NO : 5646</th>
		  
	</tr>
	<tr>
			<th align="left">To</th>	 
	 	
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th align="right">@if(!Request::get('members')) Sale Point @elseif(Request::get('members'))  @endif ID No : SP0001</th>
	
		  
	</tr>
	<tr>
		 @if(!Request::get('monthly'))
		<th align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
	 
		@else
			<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		@endif
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>		 
			<th align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
	 	 
	</tr>
	<tr> 
		@if(!Request::get('monthly'))
		<th align="left"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </th>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>	 
 		@endif
		 @if(!Request::get('monthly'))
		<th align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		 @endif

	</tr>
	<tr>
		 @if(!Request::get('monthly'))
		<th align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		@endif	 
		 @if(!Request::get('monthly'))
		<th align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th> 
		@endif
	</tr><tr>
		<th align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
 
	 
		 @if(!Request::get('monthly'))
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
	 
		@else
			<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		@endif
	</tr>
	<tr>
		<th align="left"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
	 
	 
			 @if(!Request::get('monthly'))
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th align="right">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
 
		@else
			<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
			<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		@endif
	</tr>
	<tr>
		<th align="left">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		 
		 
		<th>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</th>
		<th align="right"></th>
	 
	</tr>
</table>
<table  cellspacing="0" width="100%" border="1" style="border-collapse: collapse;" cellpadding="10">
<tr>
		<th>SNO</th>					 
		<th>DATE</th>		
		<th>DOWNLINE ID NO</th>	
		@if(!Request::get('members'))	
		<th>DIRECT DOWNLINE PURCHASE AMOUNT</th>
		<th>DIRECT DOWNLINE PURCHASE COMMISION</th>
		@endif
		<th>DOWNLINE PURCHASE AMOUNT</th>
		<th>DOWNLINE PURCHASE COMMISION</th>
{{-- 		<th>TOTAL COMMISION EARNED</th> --}}
		<th>DEDUCTIONS</th>	 
</tr>
<tbody id="purchase">
	<tr style="border-bottom: none;">
		<td>1</td>
		<td>Description</td>
		<td>123</td>
			@if(!Request::get('members'))	
		<td>123</td>
		<td>123</td>
		@endif
		<td>123</td>
		<td>123</td>
		<td>123</td>
		{{-- <td>123</td> --}}
 
	</tr>
	 <tr style="border-bottom: none;border-top: none">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		@if(!Request::get('members'))
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		@endif
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		{{-- <td>&nbsp;</td> --}}
 
	</tr>
	<tr style="border-bottom: none;border-top: none">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		@if(!Request::get('members'))
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		@endif
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		{{-- <td>&nbsp;</td> --}}
 
	</tr>
	<tr style="border-bottom: none;border-top: none">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		@if(!Request::get('members'))
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		@endif
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		{{-- <td>&nbsp;</td> --}}
 
	</tr>
	<tr style="border-bottom: none;border-top: none">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		@if(!Request::get('members'))
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		@endif
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		{{-- <td>&nbsp;</td> --}}
 
	</tr>
	<tr style="border-bottom: none;border-top: none">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		@if(!Request::get('members'))
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		@endif
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		{{-- <td>&nbsp;</td> --}}
 
	</tr>
	<tr style="border-bottom: none;border-top: none">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		@if(!Request::get('members'))
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		@endif
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		{{-- <td>&nbsp;</td> --}}
 
	</tr>
	<tr style="border-bottom: none;border-top: none">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		@if(!Request::get('members'))
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		@endif
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		{{-- <td>&nbsp;</td> --}}
 
	</tr>
	<tr style="border-bottom: none;border-top: none">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		@if(!Request::get('members'))
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		@endif
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		{{-- <td>&nbsp;</td> --}}
 
	</tr>
	<tr style="border-top: none">
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		@if(!Request::get('members'))
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		@endif
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		<td>&nbsp;</td>
		{{-- <td>&nbsp;</td> --}}
 
	</tr>
 
	<tr>
		<td align="right" colspan="2"><b>GROSS TOTAL</b></td>
		<td ><b>123</b></td>
		<td ><b>123</b></td>
		<td ><b>123</b></td>
		@if(!Request::get('members'))
		<td ><b>123</b></td>
		<td ><b>123</b></td>
		@endif
		
		<td ><b>123</b></td>
		{{-- <td ><b>123</b></td> --}}
	</tr>
	<tr> 
		<td align="left" colspan="9"><b>SUB TOTAL  : </b></td>
	</tr>
	<tr> 
		<td align="left" colspan="9"><b>ROUND OFF  : </b></td>
	</tr>
	<tr> 
		<td align="left" colspan="9"><b>NET PAY  : </b></td>
	</tr>

</table>
<br>
	<div align="center" onclick="window.print()">
<button class="btn btn-primary" align="center">Print</button>
</div>