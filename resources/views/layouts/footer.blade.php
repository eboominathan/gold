<script>
  var resizefunc = [];
</script>

<!-- jQuery  -->
<script src="{{ asset('assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('assets/js/detect.js')}}"></script>
<script src="{{ asset('assets/js/fastclick.js')}}"></script>
<script src="{{ asset('assets/js/jquery.slimscroll.js')}}"></script>
<script src="{{ asset('assets/js/jquery.blockUI.js')}}"></script>
<script src="{{ asset('assets/js/waves.js')}}"></script>
<script src="{{ asset('assets/js/wow.min.js')}}"></script>
<script src="{{ asset('assets/js/jquery.nicescroll.js')}}"></script>
<script src="{{ asset('assets/js/jquery.scrollTo.min.js')}}"></script>
<!--  datatable -->
<script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js')}}"></script>
<script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.js')}}"></script>
<!--  datatable ends -->



<script src="{{ asset('assets/plugins/notifyjs/js/notify.js')}}"></script>
 <script src="{{ asset('assets/plugins/notifications/notify-metro.js')}}"></script>
 <script src="{{ asset('assets/plugins/bootstrap-sweetalert/sweet-alert.js')}}"></script>



{{-- @if(Request::segment(2) == 'generate-pin') --}}
 {{--    <script src="{{ asset('assets/plugins/bootstrap-tagsinput/js/bootstrap-tagsinput.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/switchery/js/switchery.min.js')}}"></script>
    <script type="text/javascript" src="{{ asset('assets/plugins/multiselect/js/jquery.multi-select.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/jquery-quicksearch/jquery.quicksearch.js')}}"></script>
        <script src="{{ asset('assets/plugins/select2/js/select2.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/bootstrap-select/js/bootstrap-select.min.js')}}" type="text/javascript"></script>
<script src="{{ asset('assets/plugins/bootstrap-filestyle/js/bootstrap-filestyle.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/bootstrap-touchspin/js/jquery.bootstrap-touchspin.min.js')}}" type="text/javascript"></script>
        <script src="{{ asset('assets/plugins/bootstrap-maxlength/bootstrap-maxlength.min.js')}}" type="text/javascript"></script>

        <script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/jquery.mockjax.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/jquery.autocomplete.min.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/plugins/autocomplete/countries.js')}}"></script>
        <script type="text/javascript" src="{{ asset('assets/pages/autocomplete.js')}}"></script>

        <script type="text/javascript" src="{{ asset('assets/pages/jquery.form-advanced.init.js')}}"></script> --}}

        {{-- @endif --}}

        <script type="text/javascript">
          var baseUrl = "{{ url('/')}}";
        </script>

        @if(Request::segment(1) == 'sale-point-members')
          <script type="text/javascript">
              $(document).ready(function() {
          

                  var table =  $('#salepoint_member').DataTable({
              processing: true,
              serverSide: true,
              ajax: {
                url: '{{ url('sale-point-member-list') }}',
                method:'post',
                data: function (d) {
                   d._token = "{{ csrf_token() }}";
                   d.date_from = $('#date_from').val(); 
                   d.month_from =  $('#month_from').val(); 
                }
              },
              columns: [
                  { data: 'id', name: 'id'},                  
                  { data:'name',name:'name'},
                  { data:'sale_point_id',name:'sale_point_id'},
                  { data:'hidden',name:'hidden'},
                  { data:'date',name:'date'},
                  { data:'sponsor_id',name:'sponsor_id'},
                  { data:'address',name:'address'},
                  { data:'mobile',name:'mobile'},
                  { data:'email',name:'email'}
                ]
              });
              
                  $('.btnGetInfo').click(function(){
                      table.draw();
                  })
              });     




          </script>
        @endif

        @if(Request::segment(1) == 'sale-point-member')
          <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        <script type="text/javascript">
         jQuery('.datepicker').datepicker({
          format: 'dd-mm-yyyy',
          todayHighlight:true,
          autoclose :true,

        }); 
      </script>
        @endif
        @if(Request::segment(1) == 'sale-point-master')
        <script src="{{ asset('assets/datatables/js/jquery.dataTables.min.js')}}"></script>
        <script src="{{ asset('assets/datatables/js/dataTables.bootstrap.js')}}"></script>
             <script src="{{ asset('js/custom/salepoint_master.js')}}"></script>
        @endif
        @if(Request::segment(1) == 'purchase-order-invoice')
           <script src="{{ asset('assets/plugins/moment/moment.js')}}"></script>
        <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        <script type="text/javascript">
         jQuery('.datepicker').datepicker({
          format: 'dd-mm-yyyy',
          todayHighlight:true,
          autoclose :true,

        }); 
         jQuery('.monthpicker').datepicker({
           format: "mm-yyyy",
           viewMode: "months", 
           minViewMode: "months",
           todayHighlight:true
         });  
  </script>


        @endif
        @if(Request::segment(1) == 'salepoint-payout' || Request::segment(1) == 'salepoint-payout-list' || Request::segment(1) == 'members-payout' || Request::segment(1) == 'members-payout-list' )

        <script src="{{ asset('assets/plugins/moment/moment.js')}}"></script>
        <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        <script type="text/javascript">
         jQuery('.datepicker').datepicker({
          format: 'dd-mm-yyyy',
          todayHighlight:true,
          autoclose :true,

        }); 
         jQuery('.monthpicker').datepicker({
           format: "mm-yyyy",
           viewMode: "months", 
           minViewMode: "months",
           todayHighlight:true
         });    
         function checkAll(){

          if($('input.checked').is(':checked')){
            $('input.checked').prop('checked',false);
          }else{
            $('input.checked').prop('checked',true);
          }
        }
      </script>
      @endif
      @if(Request::segment(1) == 'view-downline-members-purchase')
      <script src="{{ asset('assets/plugins/moment/moment.js')}}"></script>
      <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
      <script type="text/javascript">

       jQuery('.monthpicker').datepicker({
         format: "mm-yyyy",
         viewMode: "months", 
         minViewMode: "months",
         todayHighlight:true
       });

     </script>
     @endif          @if(Request::segment(1) == 'salepoint-downline-member-purchase')
     <script src="{{ asset('assets/plugins/moment/moment.js')}}"></script>
     <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
     <script type="text/javascript">
       jQuery('.datepicker').datepicker({
        format: 'dd-mm-yyyy',
        todayHighlight:true,
        autoclose :true,

      }); 
       jQuery('.monthpicker').datepicker({
         format: "mm-yyyy",
         viewMode: "months", 
         minViewMode: "months",
         todayHighlight:true
       });

     </script>
     @endif
     @if(Request::segment(1) == 'product-stock-list-daily'  || Request::segment(1) == 'product-stock-list-monthly')

     <script src="{{ asset('assets/plugins/moment/moment.js')}}"></script>
     <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
     <script type="text/javascript">
       jQuery('.datepicker').datepicker({
        format: 'dd-mm-yyyy',
        todayHighlight:true,
        autoclose :true,

      }); 
       jQuery('.monthpicker').datepicker({
         format: "mm-yyyy",
         viewMode: "months", 
         minViewMode: "months",
         todayHighlight:true
       });
       function showTable(){
            //if($('#datatables').hasClass('hide')){
              $('#datatables').removeClass('hide')
            // }else{
            //   $('#datatables').addClass('hide')
            // }

          }
        </script>
        @endif 
        @if(Request::segment(1) == 'purchase-sale-stock-list-daily'  || Request::segment(1) == 'purchase-sale-stock-list-monthly')

        <script src="{{ asset('assets/plugins/moment/moment.js')}}"></script>
        <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
        <script type="text/javascript">
         jQuery('.datepicker').datepicker({
          format: 'dd-mm-yyyy',
          todayHighlight:true,
          autoclose :true,

        }); 
         jQuery('.monthpicker').datepicker({
           format: "mm-yyyy",
           viewMode: "months", 
           minViewMode: "months",
           todayHighlight:true
         });
       </script>



       @endif
       @if(Request::segment(1) == 'product-sales-daily'  || Request::segment(1) == 'product-sales-monthly')

       <script src="{{ asset('assets/plugins/moment/moment.js')}}"></script>
       <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
       <script type="text/javascript">
         jQuery('.datepicker').datepicker({
          format: 'dd-mm-yyyy',
          todayHighlight:true,
          autoclose :true,

        }); 
         jQuery('.monthpicker').datepicker({
           format: "mm-yyyy",
           viewMode: "months", 
           minViewMode: "months",
           todayHighlight:true
         });
       </script>


       @endif
       @if(Request::segment(1) == 'order-invoice-daily')


       <script type="text/javascript">
        $('#datatable').DataTable();

      </script>
      @endif

      @if(Request::segment(1) == 'order-invoice-daily'|| Request::segment(1) == 'order-invoice-monthly')
      <script src="{{ asset('assets/plugins/moment/moment.js')}}"></script>
      <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
      <script type="text/javascript">
       jQuery('.datepicker').datepicker({
        format: 'dd-mm-yyyy',
        todayHighlight:true,
        autoclose :true,
      }); 

    </script>

    @endif
    @if(Request::segment(1) == 'products')
    <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.js') }}"></script> 
    <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap.min.js') }}"></script>

    <!-- Modal-Effect -->
    <script src="{{ asset('assets/plugins/custombox/js/custombox.min.js')}}"></script>
    <script src="{{ asset('assets/plugins/custombox/js/legacy.min.js')}}"></script>


    <script type="text/javascript">
     var resizefunc = [];
     $('#datatable-responsive').DataTable();

     $('.btn-sm ').click(function(){
      $('.modal-title').text('Edit Product');
      $('#con-close-modal').modal('show');
    });$('.add ').click(function(){
      $('.modal-title').text('Add Product');
      $('#con-close-modal').modal('show');
    });
  </script>


  @endif
  @if(Request::segment(1) == 'sale-point-members')

  <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.js') }}"></script> 
  <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
  <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap.min.js') }}"></script>



  <script type="text/javascript">
    $('#datatable-responsive').DataTable();
  </script>
  @endif
  @if(Request::segment(1) == 'sale-point-members' || Request::segment(1) == 'members'|| Request::segment(1) == 'salepoint-downline-members' )
  <script src="{{ asset('assets/plugins/moment/moment.js')}}"></script>
  <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
  <script type="text/javascript">
   jQuery('.datepicker').datepicker({
    format: 'dd-mm-yyyy',
    todayHighlight:true,
    autoclose :true,

  }); 
   jQuery('.monthpicker').datepicker({
     format: "mm-yyyy",
     viewMode: "months", 
     minViewMode: "months",
     todayHighlight:true
   });
 </script>
 @endif
 @if(Request::segment(1) == 'application-form' || Request::segment(1) == 'view-member-info')
 <script src="{{ asset('assets/plugins/moment/moment.js')}}"></script>
 <script src="{{ asset('assets/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>
 <script type="text/javascript">
   jQuery('.datepicker').datepicker({
    format: 'dd-mm-yyyy',
    todayHighlight:true,
    autoclose :true
  });
</script>
@endif
@if(Request::segment(1) == 'dashboard')
{{-- Dashbaord  --}}
<script src="{{ asset('assets/plugins/peity/jquery.peity.min.js')}}"></script>

<!-- jQuery  -->
<script src="{{ asset('assets/plugins/waypoints/lib/jquery.waypoints.js')}}"></script>
<script src="{{ asset('assets/plugins/counterup/jquery.counterup.min.js')}}"></script>



<script src="{{ asset('assets/plugins/morris/morris.min.js')}}"></script>
<script src="{{ asset('assets/plugins/raphael/raphael-min.js')}}"></script>

<script src="{{ asset('assets/plugins/jquery-knob/jquery.knob.js')}}"></script>

<script src="{{ asset('assets/pages/jquery.dashboard.js')}}"></script>
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $('.counter').counterUp({
      delay: 100,
      time: 1200
    });

    $(".knob").knob();

  });
</script>       

{{-- Dashbaord  --}}
@endif




<script src="{{ asset('assets/js/jquery.core.js')}}"></script>
<script src="{{ asset('assets/js/jquery.app.js')}}"></script>

<script type="text/javascript">
  $(document).ready(function () {

    $('#datatable').dataTable();
  });
</script>

</body>
</html>