<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="en"> 
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title')</title>
  <base href="{{ \URL::to('/') }}">
  <script src="https://kit.fontawesome.com/00d58f113f.js" crossorigin="anonymous"></script>
    
  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
   <link rel="stylesheet" href="{{ asset('plugins/ijaboCropTool/ijaboCropTool.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">

  <!--All Css Here-->

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="style.css"> 
 
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- Modernizr Js -->
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>
  <link href="{{ asset('app-assets/vendors/css/vendors.min.css') }}" rel="stylesheet">
 
    <link href="{{ asset('app-assets/css/colors.css') }}" rel="stylesheet">
  
    <link href="{{ asset('app-assets/css/colors.css') }}" rel="stylesheet">
   <!-- <link href="{{ asset('app-assets/css/components.css') }}" rel="stylesheet">-->
    <link href="{{ asset('app-assets/css/themes/dark-layout.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/themes/bordered-layout.css') }}" rel="stylesheet">
    <link href="{{ asset('app-assets/css/themes/semi-dark-layout.css') }}" rel="stylesheet">
    <!-- BEGIN: Page CSS-->
    <link href="{{ asset('app-assets/css/core/menu/menu-types/horizontal-menu.css') }}" rel="stylesheet">
    <!-- END: Page CSS-->

    <!-- BEGIN: Custom CSS-->

    <!-- END: Custom CSS-->
 <!-- for export -->
 <link href="{{URL::to('assets1/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
 <link href="{{URL::to('assets1/css/style.css')}}" rel="stylesheet">
    
    <script src="{{ asset('assets/js/jquery-1.12.4.minb8ff.js?ver=1.12.4') }}"></script>
    <script src="{{ asset('assets/js/functions.js') }}"></script>
  
     
</head>
<style> 

.reviews{
  float:right;
}
.star-rating{
    font-size: 0;
    position: relative;
    display: inline-block;
    color: #eee;
}
@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
    .star-rating{
        overflow: hidden;
        color: #eee;
    }
}
.star-rating::before{
    content: "\f005\f005\f005\f005\f005";
    font-family: FontAwesome;
    font-size: 15px;
    color: #e6e6e6;
}

.star-rating span{
    display: inline-block;
    float: left;
    overflow-x: hidden; 
    position: absolute;
    top: 4px;
    left: 0;
    color: #eee;
}
.star-rating span:before{
    content: "\f005\f005\f005\f005\f005";
    font-size: 15px;
    color: #ffc107;
   
}

.width-0-percent{
  width:0%;
}
.width-1-percent{
  width:1%;
}
.width-2-percent{
  width:2%;
}
.width-3-percent{
  width:3%;
}
.width-4-percent{
  width:4%;
}
.width-5-percent{
  width:5%;
}
.width-6-percent{
  width:6%;
}
.width-7-percent{
  width:7%;
}
.width-8-percent{
  width:8%;
}
.width-9-percent{
  width:9%;
}
.width-10-percent{
  width:10%;
}
.width-11-percent{
  width:11%;
}
.width-12-percent{
  width:12%;
}
.width-13-percent{
  width:13%;
}
.width-14-percent{
  width:14%;
}
.width-15-percent{
  width:15%;
}
.width-16-percent{
  width:16%; 
}
.width-17-percent{
  width:17%;
}
.width-18-percent{
  width:18%;
}
.width-19-percent{
  width:19%;
}
.width-20-percent{
  width:20%;
}
.width-21-percent{
  width:21%;
}
.width-22-percent{
  width:22%;
}
.width-23-percent{
  width:23%;
}
.width-24-percent{
  width:24%;
}
.width-25-percent{
  width:25%;
}
.width-26-percent{
  width:26%;
}
.width-27-percent{
  width:27%;
}
.width-28-percent{
  width:28%;
}
.width-29-percent{
  width:29%;
}
.width-30-percent{
  width:30%;
}
.width-31-percent{
  width:31%;
}
.width-32-percent{
  width:32%;
}
.width-33-percent{
  width:33%;
}
.width-34-percent{
  width:34%;
}
.width-35-percent{
  width:35%;
}
.width-36-percent{
  width:36%;
}
.width-37-percent{
  width:37%;
}
.width-38-percent{
  width:38%;
}
.width-39-percent{
  width:39%;
}
.width-40-percent{
  width:40%;
}
.width-41-percent{
  width:41%;
}
.width-42-percent{
  width:42%;
}
.width-43-percent{
  width:43%;
}
.width-44-percent{
  width:44%;
}
.width-45-percent{
  width:45%;
}
.width-46-percent{
  width:46%;
}
.width-47-percent{
  width:47%;
}
.width-48-percent{
  width:48%;
}
.width-49-percent{
  width:49%;
}
.width-50-percent{
  width:50%;
}
.width-51-percent{
  width:51%;
}
.width-52-percent{
  width:52%;
}
.width-53-percent{
  width:53%;
}
.width-54-percent{
  width:54%;
}
.width-55-percent{
  width:55%;
}
.width-56-percent{
  width:56%;
}
.width-57-percent{
  width:57%;
}
.width-58-percent{
  width:58%;
}
.width-59-percent{
  width:59%;
}
.width-60-percent{
  width:60%;
}
.width-61-percent{
  width:61%;
}
.width-62-percent{
  width:62%;
}
.width-63-percent{
  width:63%;
}
.width-64-percent{
  width:64%;
}
.width-65-percent{
  width:65%;
}
.width-66-percent{
  width:66%;
}
.width-67-percent{
  width:67%;
}
.width-68-percent{
  width:68%;
}
.width-69-percent{
  width:69%;
}
.width-70-percent{
  width:70%;
}
.width-71-percent{
  width:71%;
}
.width-72-percent{
  width:72%;
}
.width-73-percent{
  width:73%;
}
.width-74-percent{
  width:74%;
}
.width-75-percent{
  width:75%;
}
.width-76-percent{
  width:76%;
}
.width-77-percent{
  width:77%;
}
.width-78-percent{
  width:78%;
}
.width-79-percent{
  width:79%;
}
.width-80-percent{
  width:80%;
}
.width-81-percent{
  width:81%;
}
.width-82-percent{
  width:82%;
}
.width-83-percent{
  width:83%;
}
.width-84-percent{
  width:84%;
}
.width-85-percent{
  width:85%;
}
.width-86-percent{
  width:86%;
}
.width-87-percent{
  width:87%;
}
.width-88-percent{
  width:88%;
}
.width-89-percent{
  width:89%;
}
.width-90-percent{
  width:90%;
}
.width-91-percent{
  width:91%;
}
.width-92-percent{
  width:92%;
}
.width-93-percent{
  width:93%;
}
.width-94-percent{
  width:94%;
}
.width-95-percent{
  width:95%;
}
.width-96-percent{
  width:96%;
}
.width-97-percent{
  width:97%;
}
.width-98-percent{
  width:98%;
}
.width-99-percent{
  width:99%;
}
.width-100-percent{
  width:100%; 
}
h5{
    /* Other styling... */
    text-align: right;
    clear: both;
    float:left;
    margin-right:15px;
}
</style>
<body class="sidebar-mini layout-fixed text-sm">
<div class="wrapper">

  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
      </li>
     
    </ul>


  </nav>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4" >
    <!-- Brand Logo -->
    

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
  
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="d-block admin_name">
        <div class="image">
           <img src="{{ URL::to('/image/'. Auth::user()->avatar) }}" alt="{{ Auth::user()->avatar }}" class="brand-image img-circle elevation-3" style="opacity: .8">
        </div></div>
        <div class="info">
        <a href="{{route('designer.projectviews')}}" class="d-block admin_name">{{ Auth::user()->name }}</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-compact nav-child-indent nav-collapse-hide-child nav-flat" data-widget="treeview" role="menu" data-accordion="false" >
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item" style="margin-bottom:10px;">
                <a href="{{route('designer.projectviews')}}" class="nav-link {{ (request()->is('admin/profile*')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                   Bid Project
                  </p>
                </a>
</li>


               <li class="nav-item" style="margin-bottom:5px;">
                <a href="{{route('designer.myprofile')}}" class="nav-link {{ (request()->is('admin/profile*')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-user-circle"></i>
                  <p>
                   My Profile
                  </p>
                </a>
</li>

              <li class="nav-item" style="margin-bottom:5px;">
                <a href="{{route('designer.mybid')}}"class="nav-link {{ (request()->is('admin/profile*')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-gavel"></i>
                  <p>
                  My Bid
                  </p>
                </a>
               
              </li>

              <li class="nav-item" style="margin-bottom:5px;">
            <a href="{{route('designer.rated')}}" class="nav-link ">
            <i class="nav-icon fas fa-star"></i>
              <p>
              My Rating
              
              </p>
            </a>
           
          </li>

          <li class="nav-item" style="margin-bottom:5px;">
            <a href="{{route('designer.myreport')}}" class="nav-link ">
            <i class="nav-icon fas fa-file-alt"></i>
              <p>
              My Reports
              
              </p>
            </a>
           
          </li>

          

          <li class="nav-item d-none d-sm-inline-block">
        <a class="nav-link " href="{{ route('logout') }}" 
            onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
            <i class="nav-icon fas fa-sign-out-alt"></i>
            <p>
            {{ __('Logout') }}
          </p>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
        </form>
      </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
    <a href="{{ route('admin.home')}}" class="brand-link">
      <img src="/image/logopic.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">𝙄𝙉𝙏𝙀𝙍𝙄𝙊𝙍 𝙎𝙏𝙐𝘿𝙄𝙊</span> 
    </a>
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  @yield('designer_content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">>
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('plugins/ijaboCropTool/ijaboCropTool.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>

{{-- CUSTOM JS CODES --}}
<script>
  $.ajaxSetup({
     headers:{
       'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')
     }
  });
  
  $(function(){
    /* UPDATE ADMIN PERSONAL INFO */
    $('#AdminInfoForm').on('submit', function(e){
        e.preventDefault();
        $.ajax({
           url:$(this).attr('action'),
           method:$(this).attr('method'),
           data:new FormData(this),
           processData:false,
           dataType:'json',
           contentType:false,
           beforeSend:function(){
               $(document).find('span.error-text').text('');
           },
           success:function(data){
                if(data.status == 0){
                  $.each(data.error, function(prefix, val){
                    $('span.'+prefix+'_error').text(val[0]);
                  });
                }else{
                  $('.admin_name').each(function(){
                     $(this).html( $('#AdminInfoForm').find( $('input[name="name"]') ).val() );
                  });
                  alert(data.msg);
                }
           }
        });
    });
    $(document).on('click','#change_picture_btn', function(){
      $('#admin_image').click();
    });
    $('#admin_image').ijaboCropTool({
          preview : '.admin_picture',
          setRatio:1,
          allowedExtensions: ['jpg', 'jpeg','png'],
          buttonsText:['CROP','QUIT'],
          buttonsColor:['#30bf7d','#ee5155', -15],
         
          // withCSRF:['_token','{{ csrf_token() }}'],
          onSuccess:function(message, element, status){
             alert(message);
          },
          onError:function(message, element, status){
            alert(message);
          }
       });
    $('#changePasswordAdminForm').on('submit', function(e){
         e.preventDefault();
         $.ajax({
            url:$(this).attr('action'),
            method:$(this).attr('method'),
            data:new FormData(this),
            processData:false,
            dataType:'json',
            contentType:false,
            beforeSend:function(){
              $(document).find('span.error-text').text('');
            },
            success:function(data){
              if(data.status == 0){
                $.each(data.error, function(prefix, val){
                  $('span.'+prefix+'_error').text(val[0]);
                });
              }else{
                $('#changePasswordAdminForm')[0].reset();
                alert(data.msg);
              }
            }
         });
    });
    
  });
</script>
<script>
          "use strict";

          !function() {
            var t = window.driftt = window.drift = window.driftt || [];
            if (!t.init) {
              if (t.invoked) return void (window.console && console.error && console.error("Drift snippet included twice."));
              t.invoked = !0, t.methods = [ "identify", "config", "track", "reset", "debug", "show", "ping", "page", "hide", "off", "on" ], 
              t.factory = function(e) {
                return function() {
                  var n = Array.prototype.slice.call(arguments);
                  return n.unshift(e), t.push(n), t;
                };
              }, t.methods.forEach(function(e) {
                t[e] = t.factory(e);
              }), t.load = function(t) {
                var e = 3e5, n = Math.ceil(new Date() / e) * e, o = document.createElement("script");
                o.type = "text/javascript", o.async = !0, o.crossorigin = "anonymous", o.src = "https://js.driftt.com/include/" + n + "/" + t + ".js";
                var i = document.getElementsByTagName("script")[0];
                i.parentNode.insertBefore(o, i);
              };
            }
          }();
          drift.SNIPPET_VERSION = '0.3.1';
          drift.load('dkf4u8aye86y');
</script>
  <!-- for export all -->
  <script src="{{URL::to('assets1/js/plugins/dataTables/datatables.min.js')}}"></script>
    <script src="{{URL::to('assets1/js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>


<!-- export Scripts -->
<script>
        $(document).ready(function(){
            $('#example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'excel', title: 'DesignerReport'},
                    {extend: 'pdf', title: 'DesignerReport'},

                    {extend: 'print',
                     customize: function (win){
                        $(win.document.body).addClass('black-bg');
                        $(win.document.body).css('font-size', '10px');

                        $(win.document.body).find('table')
                        .addClass('compact')
                        .css('font-size', 'inherit');
                    }
                    }
                ]
            });
        });
        </script>
</body>
</html>