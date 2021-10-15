@extends('layouts.designer')
@section('designer_content')  
    <link rel="apple-touch-icon" href="app-assets/images/ico/apple-icon-120.png">
    <link rel="shortcut icon" type="image/x-icon" href="app-assets/images/ico/favicon.ico">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600" rel="stylesheet">

    <!-- BEGIN: Custom CSS-->
   
    <!-- END: Custom CSS-->

 



<!-- END: Head-->

<!-- BEGIN: Body-->

    <!-- BEGIN: Content-->
  
          <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1>Designer Profile</h1>
            </div>
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                
              </ol>
            </div>
          </div>
        </div><!-- /.container-fluid -->
      </section>
  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-3">
  
              <!-- Profile Image -->
              <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                  <div class="text-center">
                    <img class="profile-user-img img-fluid img-circle admin_picture" src="{{ URL::to('/image/'. Auth::user()->avatar) }}" alt="{{ Auth::user()->avatar }}" style="width:170px;height:170px;">
                  </div>
  @foreach($designers as $designer)
                  <h3 class="profile-username text-center admin_name" style="margin-top:30px;">{{$designer->name}}</h3>
  
                  <p class="text-muted text-center" style="margin-bottom:42px;">Designer ID :{{$designer->id}}</p>

                  
                  <a  class="btn btn-primary btn-block" id="change_picture_btn" data-toggle="modal" data-idUpdate="'.$designer->id.'" data-target="#userUpdate"><b>Edit Profile</b></a>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
     
          
            </div>
            <!-- /.col -->
            <div class="col-md-9">
              <div class="card">
                <div class="card-header p-2">
                  <ul class="nav nav-pills">
                    <li class="nav-item"><a class="nav-link active" href="#personal_info" data-toggle="tab">Personal Information</a></li>
                    <li class="nav-item"><a class="nav-link" href="#change_password" data-toggle="tab">Change Password</a></li>
                  </ul>
                </div><!-- /.card-header -->
                <div class="card-body">
                  <div class="tab-content">
                    <div class="active tab-pane" id="personal_info">
                      <form class="form-horizontal" method="POST" action="#" id="AdminInfoForm">
                        <div class="form-group row">
                          <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="inputName" placeholder="Name" value="{{$designer->name }}" name="name" style="border:none;"readonly>

                            <span class="text-danger error-text name_error"></span>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputEmail" class="col-sm-2 col-form-label">Email</label>
                          <div class="col-sm-10">
                            <input type="text" class="form-control" id="e_email" placeholder="Email" value="{{ $designer->email }}" name="email" style="border:none;"readonly>
                            <span class="text-danger error-text email_error"></span>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-2 col-form-label">Contact</label>
                          <div class="col-sm-10">
                            <input type="tel" class="form-control" id="e_contact" name="contact" value="{{ $designer->contact }}" style="border:none;"readonly>
                            <span class="text-danger error-text favoritecolor_error"></span>
                          </div>
                        </div>
                        <div class="form-group row">
                          <label for="inputName2" class="col-sm-2 col-form-label">Company Address</label>
                          <div class="col-sm-10">
                            <input type="tel" class="form-control" id="inputName2"  value="" name="favoritecolor" style="border:none;"readonly>
                            <span class="text-danger error-text favoritecolor_error"></span>
                          </div>
                        </div>
                      </form>
                    </div>
                    @endforeach

                        <!-- Modal Update-->
                        <div class="modal fade" id="userUpdate" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
                            <div class="modal-dialog modal-lg" role="document">
                                <div class="modal-content">
                                    <div class="modal-header text-write">
                                        <h4 class="modal-title">Edit Profile</h4>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true"><i class="ti-close"></i></span>
                                        </button>
                                    </div>
                                    <form action="/userUpdate" method="post" enctype="multipart/form-data"><!-- form delete -->
                                        {{ csrf_field() }}
                                        <input type = "text" hidden class="col-sm-9 form-control"id ="idUpdate" name ="idUpdate" value="{{$designer->id}}" />
                                        <div class="modal-body">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Full Name</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="e_name"name="name" class="form-control" value="{{$designer->name}}" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Email</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="e_email"name="email" class="form-control" value="{{$designer->email}}" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Contact</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id="e_contact"name="contact" class="form-control" value="{{$designer->contact}}" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Company Address</label>
                                                <div class="col-sm-9">
                                                    <input type="text" id=""name="" class="form-control" value="" />
                                                </div>
                                            </div>
                                            <div class="form-group row">
                                           <!--<label class="col-sm-3 col-form-label">Avatar</label>-->
                                            <div class="col-sm-9">
                                            <div class="position-relative">
                                           <!--     <input type="file" class="form-control"  id="first-name-icon" name="avatar"/>
                                                <input type="hidden" name="hidden_image" value="{{  $designer->avatar }}">-->
                                            </div>
                                        </div>
                                    </div>

                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="icofont icofont-eye-alt"></i>Close</button>
                                            <button type="submit" id=""name="" class="btn btn-success  waves-light"><i class="icofont icofont-check-circled"></i>Update</button>
                                        </div>
                                    </form><!-- form delete end -->
                                </div>
                            </div>
                        </div> <!-- End Modal Delete-->

                    <!-- /.tab-pane -->
                    <div class="tab-pane" id="change_password">
                        <form class="form-horizontal" action="#" method="POST" id="changePasswordAdminForm">
                          <div class="form-group row">
                            <label for="inputName" class="col-sm-2 col-form-label">Old Password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="inputName" placeholder="Enter current password" name="oldpassword">
                              <span class="text-danger error-text oldpassword_error"></span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">New Password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="newpassword" placeholder="Enter new password" name="newpassword">
                              <span class="text-danger error-text newpassword_error"></span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <label for="inputName2" class="col-sm-2 col-form-label">Confirm New Password</label>
                            <div class="col-sm-10">
                              <input type="password" class="form-control" id="cnewpassword" placeholder="ReEnter new password" name="cnewpassword">
                              <span class="text-danger error-text cnewpassword_error"></span>
                            </div>
                          </div>
                          <div class="form-group row">
                            <div class="offset-sm-2 col-sm-10" style="margin-bottom:-3px;">
                              <button type="submit" class="btn btn-danger">Update Password</button>
                            </div>
                          </div>
                        </form>
                      </div>
                  </div>
                  <!-- /.tab-content -->
                </div><!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
          </div>
          <!-- /.row -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    

    <div class="col-md-12">
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
                                <th class="text-center">Project ID</th>
                                <th class="text-center">Client</th>
                                <th class="text-center">Budget</th>
                                <th class="text-center">Status</th>
                                <th class="text-center">Image</th>
                                
                            </tr> 
                        </thead>
                        <tbody>
                        @foreach($myprojects as $myproject)
                            <tr> 
                          
                                <td class="text-center">{{$myproject->ID_detail_id}}</td>
                                <td class="text-center">{{$myproject->client_name}}</td>
                                <td class="text-center">RM {{$myproject->reserve_price}}</td>
                                <td class="text-center">COMPLETED</td>
                                <td class="text-center"> 
                         <!-- <a class="btn btn-info btn-sm"  style="font-size:16px;margin-top:5px;margin-bottom:5px;text-align:center;">
                                <i class="fa fa-eye" style="color: white;font-size:16px;"></i>-->
                               
                               
        <a class="thumbnail">
            <img id="myImg" src="{{ asset('thumbnails/') }}/{{$myproject->image1 }}" alt="{{ $myproject->image1 }}" width="30">
        </a>
        <a class="thumbnail"> 
          <img id="myImg1" src="{{ asset('thumbnails/') }}/{{$myproject->image2 }}" alt="{{ $myproject->image2 }}" width="30">
        </a>

        <a class="thumbnail">
          <img id="myImg2" src="{{ asset('thumbnails/') }}/{{$myproject->image3 }}" alt="{{ $myproject->image3 }}" width="30">
        </a>
 
    </div>

    <div id="myModal" class="modal" style="width:45%;margin:0 auto;">

        <span class="close" onclick="document.getElementById('myModal').style.display='none'">&times;</span>

        <img class="modal-content" id="img">
        
        <div id="caption"></div>
    </div>
                              </td> 
                              
                                
                               
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


    <div class="sidenav-overlay"></div>
    <div class="drag-target"></div>


    <!-- BEGIN: Vendor JS-->
    <script src="app-assets/vendors/js/vendors.min.js"></script>
    <!-- BEGIN Vendor JS-->

    <!-- BEGIN: Page Vendor JS-->
    <script src="app-assets/vendors/js/ui/jquery.sticky.js"></script>
    <!-- END: Page Vendor JS-->

    <!-- BEGIN: Theme JS-->
    <script src="app-assets/js/core/app-menu.js"></script>
    <script src="app-assets/js/core/app.js"></script>
    <!-- END: Theme JS-->

    <!-- BEGIN: Page JS-->
    <!-- END: Page JS-->

    <script>
        $(window).on('load', function() {
            if (feather) {
                feather.replace({
                    width: 14,
                    height: 14
                });
            }
        })
    </script>
    <script>
    // select edit user
    $(document).on('click', '.userEdits', function()
    {
        var _this = $(this).parents('tr');
        
        $('#e_name').val(_this.find('.name').text());
        $('#e_email').val(_this.find('.email').text());
        $('#e_contact').val(_this.find('.contact').text());
        $('#e_avatar').val(_this.find('.avatar').file());
    });
</script>
<script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('myImg');
        var modalImg = document.getElementById("img");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
          modal.style.display = "none";
        }
    </script>

    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById('myImg');
        var modalImg = document.getElementById("img");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
            modal.style.display = "block";
            modalImg.src = this.src;
            captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
          modal.style.display = "none";
        }
    </script>

</body>

@endsection
