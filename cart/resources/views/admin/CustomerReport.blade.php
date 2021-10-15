@extends('layouts.adminlayout')
@section('content') 

<br>
<div class="breadcrumb-holder">
        <div class="container-fluid">
           
        </div>
    </div>
    <section class="forms">
        <div class="container-fluid">
        <div class="card" style="width:100%; ">
        
            <div class="card-body" style="height:480px;">
            
               
              
                <form  action="{{ route('admin.customerreport') }}" method ="GET">
                @csrf
              
<div class="row">
      <div class="col"><h5 class="card-title"style="margin-top:10px;font-size:18px;">Customer Report (Project History)</h5></div>
      <div class="col">
          <div class="float-right">
          <div class="input-group">
          <input type="text" class="form-control input-sm" id="client_name" name="client_name" style="width:180px;" placeholder="Search for user name..."/>
          <span class="input-group-btn">
        <button type="submit" class="btn" name="search" title="Search"><i class="fa fa-search" style="margin-left:10px;"></i></button>
        
       </span>  <a href="{{ route('admin.customerhistory') }}" class="btn btn-default" >FeedBack Report</a>
              <div class="inner"> <a href="{{ route('admin.downloadcsPDF') }}" class="btn btn-info" style="margin-left:10px;" ><i class="fas fa-history"></i>PDF<a></div></form>
       
         </div>      
    </div>
  </div>
</div>
<br>
               <!-- search form -->
               
            <!--<form action="{{ route('rate') }}" method="post" enctype="multipart/form-data">
             @csrf    
             <div class="inner"><input type="text" class="form-control input-sm" id="other" name="other"placeholder="Search name..." /></input></div>
              <div class="inner"> <button type="submit" style="margin-right:3px;margin-left:0.1px;" class="btn row" name="search" title="Search"><img src="https://img.icons8.com/android/24/000000/search.png" style="width:20px; height:20px;"></button></div> -->
        
           

                <div class="table-responsive" >
                    <table id="zero_config" class="table table-striped table-bordered">

                        <thead>
                            <tr>
                                <th>Project ID</th>
                                <th>Client Name</th>
                                <th>Client Contact</th>
                                <th>Location</th>
                                <th>Budget</th>
                                <th>Uploaded Date</th>
                                <th>Status</th>
                            </tr> 
                        </thead>
                        <tbody>
                        @foreach($projects as $project)
                            <tr> 
                                <td>{{$project->id}}</td>
                                <td>{{$project->client_name}}</td>
                                <td>{{$project->client_contact}}</td>
                                <td>{{$project->location}}</td>
                                <td>RM {{$project->budget}}</td>
                                <td><time datetime="2008-02-14 20:00" >{{Carbon\Carbon::parse($project->created_at)->format('d F Y')}}</time></td>
                                <td><b>Approved</b></td>
                            </tr> 
                            @endforeach
                            
                        </tbody>
                        
                        <div class="hidden"  style="display: none;">
                    {{$projects->links('pagination::bootstrap-4')}}
                    </div>

                    </table>

                  
                    <div class="text-align">
                    {{$projects->links('pagination::bootstrap-4')}}
                   </div>

</div>      
                </div>
              
            </div>
        </div>

    </div>

</div>

                   
  


@endsection

 
