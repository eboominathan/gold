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
        @if(Request::segment(1) == 'sale-point-members')

        <script src="{{ asset('assets/plugins/datatables/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/dataTables.bootstrap.js') }}"></script> 
        <script src="{{ asset('assets/plugins/datatables/dataTables.responsive.min.js') }}"></script>
        <script src="{{ asset('assets/plugins/datatables/responsive.bootstrap.min.js') }}"></script>



        <script type="text/javascript">
            $('#datatable-responsive').DataTable({
               responsive: true                    
           });
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