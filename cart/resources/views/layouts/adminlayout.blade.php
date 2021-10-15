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
  
   <!-- for export 
   <link href="{{URL::to('assets1/css/plugins/dataTables/datatables.min.css')}}" rel="stylesheet">
   <link href="{{URL::to('assets1/css/style.css')}}" rel="stylesheet">
    Favicon-->
  

</head>
<style>
<style>
* {
  font-family: sans-serif; /* Change your font family */
}

.content-table {

  border-collapse: collapse;
  margin: 25px 0;
  font-size: 1em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
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
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{ route('admin.home')}}" class="brand-link">
      <img src="/image/logopic.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">𝙄𝙉𝙏𝙀𝙍𝙄𝙊𝙍 𝙎𝙏𝙐𝘿𝙄𝙊</span> 
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="dist/img/admin-icon.jpg" alt="AdminLTE Logo" class="brand-image img-circle elevation-4" style="opacity: .8">
        </div>
        <div class="info">
        <a href="{{route('admin.home')}}" class="d-block admin_name">{{ Auth::user()->name }}</a>
        </div>
      </div>



      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column nav-legacy nav-compact nav-child-indent nav-collapse-hide-child nav-flat" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               <li class="nav-item">
               <a href="{{ route('admin.home')}}" class="nav-link ">
                  <i class="nav-icon fas fa-home"></i>
                  <p>
                    Dashboard
                    
                  </p>
                </a>
               
              </li>
               <li class="nav-item">
                <a href="#" class="nav-link {{ (request()->is('admin/profile*')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                   Client Management
                   <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview"> 
              <li class="nav-item">
                <a href="{{ route('admin.insertproject') }}"class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Client Project</p>
                </a>
              </li>
              <!--<li class="nav-item">
                <a href="{{ route('admin.insertbidproject') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Insert Details</p>
                </a>
              </li>-->
              <li class="nav-item">
                <a href="{{ route('admin.viewproject') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Details</p>
                </a>
              </li>
            </ul>
              </li>

              <li class="nav-item">
                <a href="#" class="nav-link {{ (request()->is('admin/profile*')) ? 'active' : '' }}">
                  <i class="nav-icon fas fa-user"></i>
                  <p>
                   Designer Management
                   <i class="right fas fa-angle-left"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{route('admin.viewbidresult')}}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Bid Result</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="{{ route('admin.AssignProject') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>View Assigned Project</p>
                </a>
              </li>
            </ul>
              </li>

              <li class="nav-item">
            <a href="#" class="nav-link ">
            <i class="nav-icon far fa-file-alt"></i>
              <p>
               System Report
               <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('admin.customerreport') }}" class="nav-link active">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Customer Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.DesignerReport') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Designer Report</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{ route('admin.ProjectReport') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Project Report</p>
                </a>
              </li>
            </ul>
          </li>

          <li class="nav-item">
            <a href="{{route('admin.settings')}}" class="nav-link {{ (request()->is('admin/settings*')) ? 'active' : '' }}">
              <i class="nav-icon fas fa-cog"></i>
              <p>
               Settings
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
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
    <div class="p-3">
      <h5>Title</h5>
      <p>Sidebar content</p>
    </div>
  </aside>
  <!-- /.control-sidebar -->

  <!-- Main Footer -->
  <footer class="main-footer">
    <!-- To the right -->
    
    <!-- Default to the left -->
    <strong>Copyright &copy; 2021 <a href="{{route ('admin.home')}}">Interior Studio</a>.</strong> All rights reserved.
  </footer>
</div>
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
   <!-- for export all 
   <script src="{{URL::to('assets1/js/plugins/dataTables/datatables.min.js')}}"></script>
    <script src="{{URL::to('assets1/js/plugins/dataTables/dataTables.bootstrap4.min.js')}}"></script>



<script>
        $(document).ready(function(){
            $('#example').DataTable({
                pageLength: 25,
                responsive: true,
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'excel', title: 'ProjectReport'},
                    {extend: 'pdf', title: 'ProjectReport'},

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
        </script>-->
</body>
</html>