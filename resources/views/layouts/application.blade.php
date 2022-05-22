<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" >
  <link rel="shortcut icon" href="assets/images/favicon_1.ico">

  <title>{{ $title }} .::Gold Herbal Care::.</title>


  <link href="{{ asset('assets/plugins/custombox/css/custombox.css')}}" rel="stylesheet">

  <!-- DataTables -->
    <link href="{{ asset('assets/plugins/datatables/jquery.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/datatables/buttons.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/datatables/fixedHeader.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/datatables/responsive.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/datatables/scroller.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/datatables/dataTables.colVis.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/datatables/dataTables.bootstrap.min.css')}}" rel="stylesheet" type="text/css"/>
    <link href="{{ asset('assets/plugins/datatables/fixedColumns.dataTables.min.css')}}" rel="stylesheet" type="text/css"/>



  <!-- Plugins css-->
        <link href="{{ asset('assets/plugins/bootstrap-tagsinput/css/bootstrap-tagsinput.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/switchery/css/switchery.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/multiselect/css/multi-select.css')}}"  rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/select2/css/select2.min.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{ asset('assets/plugins/bootstrap-select/css/bootstrap-select.min.css')}}" rel="stylesheet" />
        <link href="{{ asset('assets/plugins/bootstrap-touchspin/css/jquery.bootstrap-touchspin.min.css')}}" rel="stylesheet" />
        



  <link href="{{ asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/css/core.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/css/components.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/css/pages.css')}}" rel="stylesheet" type="text/css" />
  <link href="{{ asset('assets/css/responsive.css')}}" rel="stylesheet" type="text/css" />
 



  <style type="text/css">
    .red{color: red};
  </style>

  <!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
      <![endif]-->

      <script src="{{ asset('assets/js/modernizr.min.js')}}"></script>

    </head>

    <body class="fixed-left">

      <!-- Begin page -->
      <div id="wrapper">

        <!-- Top Bar Start -->
        <div class="topbar">

          <!-- LOGO -->
          <div class="topbar-left">
            <div class="text-center">
              <a href="{{url('/')}}" class="logo"><span>Gold Herbal Care</span></a>
              <!-- Image Logo here -->
              <!--<a href="index.html" class="logo">-->
                <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->
                <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->
                <!--</a>-->
              </div>
            </div>

            <!-- Button mobile view to collapse sidebar menu -->
            <div class="navbar navbar-default" role="navigation">
              <div class="container">
                <div class="">
                  <div class="pull-left">
                    <button class="button-menu-mobile open-left waves-effect waves-light">
                      <i class="md md-menu"></i>
                    </button>
                    <span class="clearfix"></span>
                  </div>




                  <ul class="nav navbar-nav navbar-right pull-right">
                    <li class="dropdown top-menu-item-xs">
                      <a href="#" data-target="#" class="dropdown-toggle waves-effect waves-light" data-toggle="dropdown" aria-expanded="true">
                        <i class="icon-bell"></i> <span class="badge badge-xs badge-danger">3</span>
                      </a>
                      <ul class="dropdown-menu dropdown-menu-lg">
                        <li class="notifi-title"><span class="label label-default pull-right">New 3</span>Notification</li>
                        <li class="list-group slimscroll-noti notification-list">
                         <!-- list item-->
                         <a href="javascript:void(0);" class="list-group-item">
                          <div class="media">
                           <div class="pull-left p-r-10">
                            <em class="fa fa-diamond noti-primary"></em>
                          </div>
                          <div class="media-body">
                            <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                            <p class="m-0">
                              <small>There are new settings available</small>
                            </p>
                          </div>
                        </div>
                      </a>

                      <!-- list item-->
                      <a href="javascript:void(0);" class="list-group-item">
                        <div class="media">
                         <div class="pull-left p-r-10">
                          <em class="fa fa-cog noti-warning"></em>
                        </div>
                        <div class="media-body">
                          <h5 class="media-heading">New settings</h5>
                          <p class="m-0">
                            <small>There are new settings available</small>
                          </p>
                        </div>
                      </div>
                    </a>

                    <!-- list item-->
                    <a href="javascript:void(0);" class="list-group-item">
                      <div class="media">
                       <div class="pull-left p-r-10">
                        <em class="fa fa-bell-o noti-custom"></em>
                      </div>
                      <div class="media-body">
                        <h5 class="media-heading">Updates</h5>
                        <p class="m-0">
                          <small>There are <span class="text-primary font-600">2</span> new updates available</small>
                        </p>
                      </div>
                    </div>
                  </a>

                  <!-- list item-->
                  <a href="javascript:void(0);" class="list-group-item">
                    <div class="media">
                     <div class="pull-left p-r-10">
                      <em class="fa fa-user-plus noti-pink"></em>
                    </div>
                    <div class="media-body">
                      <h5 class="media-heading">New user registered</h5>
                      <p class="m-0">
                        <small>You have 10 unread messages</small>
                      </p>
                    </div>
                  </div>
                </a>

                <!-- list item-->
                <a href="javascript:void(0);" class="list-group-item">
                  <div class="media">
                   <div class="pull-left p-r-10">
                    <em class="fa fa-diamond noti-primary"></em>
                  </div>
                  <div class="media-body">
                    <h5 class="media-heading">A new order has been placed A new order has been placed</h5>
                    <p class="m-0">
                      <small>There are new settings available</small>
                    </p>
                  </div>
                </div>
              </a>

              <!-- list item-->
              <a href="javascript:void(0);" class="list-group-item">
                <div class="media">
                 <div class="pull-left p-r-10">
                  <em class="fa fa-cog noti-warning"></em>
                </div>
                <div class="media-body">
                  <h5 class="media-heading">New settings</h5>
                  <p class="m-0">
                    <small>There are new settings available</small>
                  </p>
                </div>
              </div>
            </a>
          </li>
          <li>
            <a href="javascript:void(0);" class="list-group-item text-right">
              <small class="font-600">See all notifications</small>
            </a>
          </li>
        </ul>
      </li>
      <li class="hidden-xs">
        <a href="#" id="btn-fullscreen" class="waves-effect waves-light"><i class="icon-size-fullscreen"></i></a>
      </li>
      <li class="hidden-xs">
        <a href="#" class="right-bar-toggle waves-effect waves-light"><i class="icon-settings"></i></a>
      </li>
      <li class="dropdown top-menu-item-xs">
        <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="{{asset('assets/images/users/avatar-1.jpg')}}" alt="user-img" class="img-circle"> </a>
        <ul class="dropdown-menu">
          <li><a href="javascript:void(0)"><i class="ti-user m-r-10 text-custom"></i> Profile</a></li>
          <li><a href="javascript:void(0)"><i class="ti-settings m-r-10 text-custom"></i> Settings</a></li>
          <li><a href="javascript:void(0)"><i class="ti-lock m-r-10 text-custom"></i> Lock screen</a></li>
          <li class="divider"></li>
          <li><a href="{{url('/login')}}"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <!--/.nav-collapse -->
</div>
</div>
</div>
<!-- Top Bar End -->


<!-- ========== Left Sidebar Start ========== -->

<div class="left side-menu">
  <div class="sidebar-inner slimscrollleft">
    <!--- Divider -->
    <div id="sidebar-menu">
      <ul>

       <li class="text-muted menu-title">Navigation</li>
       <li class="has_sub">
        <a href="{{url('dashboard')}}" class="waves-effect"><i class="ti-home"></i><span> Dashboard </span> </a>
      </li> 
        <li class="has_sub">
        <a href="javascript:void(0);" class="waves-effect"><i class="ti-pin-alt"></i> <span> Pin Bank </span> <span class="menu-arrow"></span></a>
        <ul class="list-unstyled">
          <li><a href="{{url('generate-pin')}}">Generate Pin</a></li>                                  
        </ul>
      </li> 
       <li class="has_sub">
        <a href="{{url('application-form')}}" class="waves-effect"><i class="ti-user"></i><span> Application Form </span> </a>
      </li> 
        <li class="has_sub">
        <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i> <span> SalePoint Members </span> <span class="menu-arrow"></span></a>
        <ul class="list-unstyled">
          <li><a href="{{url('sale-point-members')}}">SalePoint Members Details</a></li>
          <li><a href="{{url('sale-point-address')}}">SalePoint Address Details</a></li>
        </ul>
      </li> 
      <li class="has_sub">
        <a href="javascript:void(0);" class="waves-effect"><i class="ti-user"></i> <span> Members </span> <span class="menu-arrow"></span></a>
        <ul class="list-unstyled">
          <li><a href="{{url('members')}}">Members</a></li>                                  
          {{-- <li><a href="{{url('members')}}">Members Details</a></li> --}}
          <li><a href="{{url('members/address')}}">Address Details</a></li>
        </ul>
      </li> 
       <li class="has_sub">
        <a href="{{url('salepoint-downline-members')}}" class="waves-effect"><i class="ti-user"></i><span> Salepoint Downline Member Details </span> </a>
      </li>
     {{--    <li class="has_sub">
        <a href="{{url('downline-members')}}" class="waves-effect"><i class="ti-user"></i><span>Downline Member Details </span> </a>
      </li>  --}}
      <li class="has_sub">
        <a href="{{url('products')}}" class="waves-effect"><i class="ti-image"></i><span> Product Details </span> </a>
      </li>    
         <li class="has_sub">
        <a href="{{url('salepoint-purchase-order')}}" class="waves-effect"><i class="ti-shopping-cart"></i><span>SalePoint Purchasing Order</span> </a>
      </li> 
      
       <li class="has_sub">
        <a href="javascript:void(0);" class="waves-effect"><i class="ti-calendar"></i> <span> Order Invoice</span> <span class="menu-arrow"></span></a>
        <ul class="list-unstyled">
          <li><a href="{{url('order-invoice-daily')}}">Daily  Reports</a></li>
          <li><a href="{{url('order-invoice-monthly')}}">Monthly Reports</a></li>
        </ul>
      </li> 
      <li class="has_sub">
        <a href="javascript:void(0);" class="waves-effect"><i class="ti-calendar"></i> <span> Tax Invoice</span> <span class="menu-arrow"></span></a>
        <ul class="list-unstyled">
          <li><a href="{{url('tax-invoice-daily')}}">Daily  Reports</a></li>
          <li><a href="{{url('tax-invoice-monthly')}}">Monthly Reports</a></li>
        </ul>
      </li> 
      <li class="has_sub">
        <a href="javascript:void(0);" class="waves-effect"><i class="ti-calendar"></i> <span> SalePoint Product Sales Details</span> <span class="menu-arrow"></span></a>
        <ul class="list-unstyled">
          <li><a href="{{url('product-sales-daily')}}">Daily  Reports</a></li>
          <li><a href="{{url('product-sales-monthly')}}">Monthly Reports</a></li>
        </ul>
      </li>
      <li class="has_sub">
        <a href="javascript:void(0);" class="waves-effect"><i class="ti-calendar"></i> <span>SalePoint Purchase Sale Stock List</span> <span class="menu-arrow"></span></a>
        <ul class="list-unstyled">
          <li><a href="{{url('purchase-sale-stock-list-daily')}}">Daily  Reports</a></li>
          <li><a href="{{url('purchase-sale-stock-list-monthly')}}">Monthly Reports</a></li>
        </ul>
      </li> 
      <li class="has_sub">
        <a href="javascript:void(0);" class="waves-effect"><i class="ti-calendar"></i> <span>SalePoint Product Stock List</span> <span class="menu-arrow"></span></a>
        <ul class="list-unstyled">
          <li><a href="{{url('product-stock-list-daily')}}">Daily  Reports</a></li>
          <li><a href="{{url('product-stock-list-monthly')}}">Monthly Reports</a></li>
        </ul>
      </li> 
    
      <li class="has_sub">
        <a href="{{url('salepoint-downline-member-purchase')}}" class="waves-effect"><i class="ti-shopping-cart"></i><span>SalePoint Downline Member Purchase</span> </a>
      </li> 
      <li class="has_sub">
        <a href="{{url('/downline-members-purchase')}}" class="waves-effect"><i class="ti-shopping-cart"></i><span>Downline Member Purchase</span> </a>
      </li> 
      <li class="has_sub">
        <a href="{{url('salepoint-payout')}}" class="waves-effect"><i class="ti-shopping-cart"></i><span>Salepoint Payout</span> </a>
      </li> 
      <li class="has_sub">
        <a href="{{url('downline-members')}}" class="waves-effect"><i class="ti-shopping-cart"></i><span>Salepoint Payout List</span> </a>
      </li> 
      <li class="has_sub">
        <a href="{{url('downline-members')}}" class="waves-effect"><i class="ti-shopping-cart"></i><span>Members Payout</span> </a>
      </li> 
      <li class="has_sub">
        <a href="{{url('downline-members')}}" class="waves-effect"><i class="ti-shopping-cart"></i><span>Members Payout List</span> </a>
      </li> 
       <li class="has_sub">
        <a href="{{url('downline-members')}}" class="waves-effect"><i class=" ti-comments"></i><span>Messages</span> </a>
      </li>
      <li class="has_sub">
        <a href="{{url('downline-members')}}" class="waves-effect"><i class="ti-unlock"></i><span>Password</span> </a>
      </li> 
    </ul>
    <div class="clearfix"></div>
  </div>
  <div class="clearfix"></div>
</div>
</div>
<!-- Left Sidebar End -->

@yield('content')


</div>
<!-- END wrapper -->

@include('layouts.footer')