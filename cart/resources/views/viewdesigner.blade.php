@extends('layouts.app')
@section('content') 
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Custom CSS-->
   
    <!-- END: Custom CSS-->

 



<!-- END: Head-->

<!-- BEGIN: Body-->

    <!-- BEGIN: Content-->
  <br> <br> <br> <br>

  <div class="container">
  <div class="row">
            <div class="col-3">
  
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                  @foreach($designers as $designer)
                    <img class="profile-user-img img-fluid img-circle admin_picture" src="{{ URL::to('/image/'. $designer->avatar) }}" alt="{{ $designer->avatar }}" style="width:170px;height:170px;">
                  </div>
<br>  
                  <p class="text-muted text-center" style="margin-bottom:42px;">Designer ID :{{$designer->id}}</p>
                  <p class="text-muted text-center" style="margin-bottom:42px;">Designer ID :{{$designer->name}}</p>
                 @endforeach

                 
                </div>
                
                <!-- /.card-body -->
              </div>
              
              <!-- /.card -->
     
          
            </div>
           

    <div class="col-9">
<div class="page-wrapper">  
    <div class="page-breadcrumb">
        <div class="row">
            <div class="col-12 d-flex no-block align-items-center">
                <h4 class="page-title"></h4>
                <div class="ml-auto text-right">
                    <nav aria-label="breadcrumb">
                        
                    </nav>
                </div>
            </div>
        </div>
       
        <div class="card" style="width:100%; margin-bottom:20px;">
      
            <div class="card-body">
                <h5 class="card-title"style="margin-top:10px;">Project Done by Designer</h5>
                <div class="row">
                <div class="ml-auto text-right" style="margin-bottom:3px;">
             
</form>                
</div>        
</div>
                <div class="table-responsive" >
                    <table id="zero_config" class="table table-striped table-bordered">
                   
                        <thead>
                            <tr>
                                <th>Project ID</th>
                                <th>Client</th>
                                <th>Budget</th>
                                <th>Status</th>
                                <th>Action</th>
                                
                            </tr> 
                        </thead>
                        <tbody>
                        @foreach($myprojects as $myproject)
                            <tr> 
                          
                                <td>{{$myproject->ID_detail_id}}</td>
                                <td>{{$myproject->client_name}}</td>
                                <td>RM {{$myproject->reserve_price}}</td>
                                <td>COMPLETED</td>
                                <td class="text-center"> <a class="btn btn-info btn-sm"  style="font-size:16px;margin-top:5px;margin-bottom:5px;text-align:center;">
                                <i class="fa fa-eye" style="color: white;font-size:16px;"></i></td>
                              
                                
                               
                            </tr> 
                            @endforeach
                        </tbody>
                        
                    </div>
                    </table>
                  
                    </div>
                    </div> 

                </div>
              
            </div>
        </div>

    </div>

</div>


</body>

@endsection
