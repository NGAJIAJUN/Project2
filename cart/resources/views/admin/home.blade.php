@extends('layouts.adminlayout')
@section('content')
<!-- Main content -->

<div class="container">
  <br>
<h4>Dashboard</h4></div>
<section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box" style="background-color:#6495ED">
              <div class="inner">
               
              <h3 style="color:white;">3</h3>
               <br>
                <h5  style="color:white;">Designer Registrations</h5>
                
              </div>
              <div class="icon">
              <i class="fas fa-users fa-3x"></i>
              </div>
              <a href="{{route('admin.home')}}"class="small-box-footer"><div style="visibility:hidden;">a</div></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box " style="background-color:#FFA500">
              <div class="inner">
              <h3 style="color:white;">4</h3>
                <br>
                <h5 style="color:white;">Client Registrations</h5>
              </div>
              <div class="icon">
              <i class="fas fa-users"></i>
              </div>
              <a href="{{route('admin.home')}}"class="small-box-footer"><div style="visibility:hidden;">a</div></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-warning"  >
              <div class="inner">
              <h3 >10</h3>
              <br>
                <h5 >Project Mangement</h5>
              </div>
              <div class="icon">
              <i class="fas fa-file-signature fa-3x"></i>
              </div>
              <a href="{{route('admin.home')}}"class="small-box-footer"><div style="visibility:hidden;">a</div></a>
            </div>
          </div>
          <!-- ./col -->
     
            <!-- small box -->
           
 <div class="col-12"> 
 <div class="card" style="width:100%; margin-bottom:20px;">
      <div class="card-body" >
          <div class="table-responsive" >
              <table id="zero_config" class="table table-striped table-bordered">
        
                  <thead>
                      <tr>
                          <th>User ID</th>
                          <th>User Name</th>
                          <th>User Contact</th>
                          <th>Email</th>
                          <th>Role_User</th>
                          <th>Status</th>
                          <th>Registered Date</th>
                          <th>Action</th>
                      </tr> 
                  </thead>
                  <tbody>
              
                      <tr> 
                          <td>1</td>
                          <td>Jason</td>
                          <td>0123456788</td>
                          <td>Jason@example.com</td>
                          <td>Client</td>
                          <td>Active</td>
                          <td>11August2021</td>
                          <td class="text-center">
                  <a href="#" 
				  class="btn btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="fas fa-trash-alt"></i></a>
                </td>
                      </tr> 
                   
                  </tbody>
                  <tbody>
              
              <tr> 
                  <td>2</td>
                  <td>John</td>
                  <td>0123456688</td>
                  <td>John@example.com</td>
                  <td>Client</td>
                  <td>Active</td>
                  <td>11August2021</td>
                  <td class="text-center">
                  <a href="#" 
				  class="btn btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr> 
           
          </tbody>
          <tbody>
              
              <tr> 
                  <td>3</td>
                  <td>Bruce</td>
                  <td>0128456788</td>
                  <td>Bruce@example.com</td>
                  <td>Designer</td>
                  <td>Active</td>
                  <td>12August2021</td>
                  <td class="text-center">
                  <a href="#" 
				  class="btn btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr> 
           
          </tbody>
          <tbody>
              
              <tr> 
                  <td>4</td>
                  <td>Josh</td>
                  <td>0125456788</td>
                  <td>Josh@example.com</td>
                  <td>Client</td>
                  <td>Active</td>
                  <td>14sAugust2021</td>
                  <td class="text-center">
                  <a href="#" 
				  class="btn btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr> 
           
          </tbody>
          <tbody>
              
              <tr> 
                  <td>5</td>
                  <td>Kitty</td>
                  <td>0123456788</td>
                  <td>Kitty@example.com</td>
                  <td>Client</td>
                  <td>Active</td>
                  <td>15August2021</td>
                  <td class="text-center">
                  <a href="#" 
				  class="btn btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr> 
           
          </tbody>
          <tbody>
              
              <tr> 
                  <td>6</td>
                  <td>Jaspher</td>
                  <td>0143456788</td>
                  <td>Jaspher@example.com</td>
                  <td>Designer</td>
                  <td>Active</td>
                  <td>19August2021</td>
                  <td class="text-center">
                  <a href="#" 
				  class="btn btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr> 
           
          </tbody>
          <tbody>
              
              <tr> 
                  <td>7</td>
                  <td>Designer</td>
                  <td>0123456688</td>
                  <td>Designer@example.com</td>
                  <td>Designer</td>
                  <td>Active</td>
                  <td>21August2021</td>
                  <td class="text-center">
                  <a href="#" 
				  class="btn btn-danger" onclick="return confirm('Sure Want Delete?')"><i class="fas fa-trash-alt"></i></a>
                </td>
              </tr> 
           
          </tbody>
          
              </table>
              



 </div>    
</div>
</div>
</div>
</div>


</section>


@endsection