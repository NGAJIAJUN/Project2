@extends('layouts.adminreport')
@section('content') 
<br>
<div class="breadcrumb-holder">
        <div class="container-fluid">
           
        </div>
    </div>
    
    <section class="forms">
        <div class="container-fluid">
          
        
        <div class="card" style="min-height:auto;">
      <div class="card-body">
           <!-- <form  action="{{ route('admin.search.product') }}" method ="GET">
                @csrf
              
<div class="row">
      <div class="col"><h5 class="card-title"style="margin-top:10px;font-size:18px;"></h5></div>
      <div class="col">
          <div class="float-right">
          <div class="input-group">
          <input type="text" class="form-control input-sm" id="other" name="name" placeholder="Search for user name..."/>
          <span class="input-group-btn">
        <button type="submit" class="btn" name="search" title="Search"><i class="fa fa-search" style="margin-left:10px;"></i></button>
       </span>
         </div>      
    </div>
  </div>
</div>
          
            </form>-->
            <br>
            <div class="table-responsive" >
            <table id="example" class="table table-striped table-bordered nowrap" style="width:100%">
                <thead> 
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Contact</th>
                        <th>Rating</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($totalprojects as $totalproject)
                    <tr> 
                        <td class="id">{{$totalproject->id}}</td>
                        <td class="name">{{$totalproject->name}}</td> 
                        <td class="email">{{$totalproject->email}}</td>
                        <td class="phone">{{$totalproject->contact}}</td>
                        <td>{{$totalproject->sumrate}}</td>
                        
                       
                        <td class="text-center">  
                            <a class="btn btn-info" href="{{route('admin.DesignerReportDetails', ['id' => $totalproject->id])}}" >
                                <i class="fa fa-eye" style="color: #fff;font-size:15px;padding:-10px -10px;"></i>
                            </a>
                        </td>
                    </tr>
                @endforeach
                
                </tbody>
            </table>  
</div>
        </div>
</div>
</div>
    </section>

    <!-- Modal Update-->
    <div class="modal fade" id="update" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header text-write">
                    <h4 class="modal-title">Update</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true"><i class="fa fa-close"></i></span>
                    </button>
                </div>
                <form action="#" method = "post"><!-- form delete -->
                    {{ csrf_field() }}
                    <input type ="text"hidden class="col-sm-9 form-control" id="id" name="id" value="" />
                    <div class="modal-body">
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Full Name</label>
                            <div class="col-sm-9">
                                <input type="text" id="e_name"name="name" class="form-control" value="" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Sex</label>
                            <div class="col-sm-9">
                                <input type="text" id="e_sex"name="sex" class="form-control" value="" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Date Of Birth</label>
                            <div class="col-sm-9">
                                <input type="date" id="e_dateOfBirth"name="dateOfBirth" class="form-control" value="" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="text" id="e_email"name="email" class="form-control" value="" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Phone</label>
                            <div class="col-sm-9">
                                <input type="text" id="e_phone"name="phone" class="form-control" value="" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Job Position</label>
                            <div class="col-sm-9">
                                <input type="text" id="e_jobPosition"name="jobPosition" class="form-control" value="" />
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-3 col-form-label">Salary</label>
                            <div class="col-sm-9">
                                <input type="text" id="e_salary"name="salary" class="form-control" value="" />
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


@endsection 