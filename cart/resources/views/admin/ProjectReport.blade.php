@extends('layouts.adminreport')
@section('content') 


<div class="breadcrumb-holder">
        <div class="container-fluid">
           
        </div>
    </div>
    
    <section class="forms">
        <div class="container-fluid">
          
        
     
      <div class="card-body" >
            <form  action="{{ route('admin.search') }}" method ="POST">
                @csrf
              
<div class="row">
      <div class="col"><b class="card-title"style="margin-top:10px;font-size:18px;"></b></div>
      <div class="col-12">
          <div class="float-right" >
          <div class="input-group">
          <label for="date" style="margin-top:7px;">Start From Date</label>
          <input type="date" class="form-control input-sm" id="fromDate" name="fromDate" style="margin-left:40px;"required/>
          <label for="date" style="margin-left:40px;margin-top:7px;">End to Date</label>
          <input type="date" class="form-control input-sm" id="toDate" name="toDate" style="margin-left:40px;" required/>
          <!--<input type="text" class="form-control input-sm" id="other" name="name" placeholder="Search for user name..."/>-->
          <span class="input-group-btn">
        <button type="submit" class="btn" name="search" title="Search"><i class="fa fa-search" style="margin-left:8px;"></i></button>
       </span>
       <a href="{{ route('admin.ProjectReport')}}" style="opacity:0;margin-left:50px;">ALL</a>
         </div>    
    </div>
  </div>
</div>
          
            </form>
            <br>
            <div class="table-responsive" >
            <table id="example" class="table table-striped table-bordered nowrap" style="width:100%:border-radius:5px 5px 5px 5px;">
                <thead> 
                    <tr>
                        <th >Project_ID</th>
                        <th>Client Name</th>
                        <th>Client Contact</th>
                        <th>Budget</th>
                        <th>Project Assign to</th>
                        <th>Designer Contact</th>
                        <th>Total Income</th>
                        <th>Status</th>
                        <th>Assigned Date</th>
                    </tr>
                </thead>
                <tbody>
                  @foreach($projects as $project)
                    <tr>
                        <td class="id">{{$project->ID_detail_id}}</td>
                        <td class="name">{{$project->client_name}}</td>
                        <td class="email">{{$project->client_contact}}</td>
                        <td class="phone">RM{{$project->reserve_price}}</td>
                        <td>{{$project->designer_name}}</td> 
                        <td>{{$project->designer_contact}}</td> 
                        <td>RM{{$project->reserve_price - $project->reserve_price/100*6 }}</td>
                     
                        <td class="text-center" style="border-radius:5px 5px;font-family:arial;font-size:15px;font-variant-caps: petite-caps;}
                        display: incline-block; margin:0 auto;padding-left:5px;padding-right:5px;padding-top:10px;padding-bottom:10px">
                        <div class="btn btn-success" style="padding:-50px;color:white;">{{$project->p_status}}</td>
                        
                        <td><time datetime="2008-02-14 20:00" >{{Carbon\Carbon::parse($project->created_at)->format('d F Y')}}</time></td>
                    </tr>
                @endforeach
                
                </tbody>
              
            </table>  
          
</div>
        </div>
</div>

    </section>

   


@endsection 