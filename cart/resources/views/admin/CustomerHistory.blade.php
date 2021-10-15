@extends('layouts.adminlayout')
@section('content') 

<br>
<div class="breadcrumb-holder">
        <div class="container-fluid">
           
        </div>
    </div>
    <section class="forms">
        <div class="container-fluid">
       
        <div class="card" style="width:100%; margin-bottom:20px;">
      
            <div class="card-body" style="height:480px;">
            <form  action="{{ route('admin.customerhistory') }}" method ="GET">
                @csrf
              
<div class="row">
      <div class="col"><h5 class="card-title"style="margin-top:10px;font-size:18px;">Customer Report (Feedback History)</h5></div>
      <div class="col">
          <div class="float-right">
          <div class="input-group">
          <input type="text" class="form-control input-sm" id="client_name" name="client_name" style="width:180px;" placeholder="Search for user name..."/>
          <span class="input-group-btn">
        <button type="submit" class="btn" name="search" title="Search"><i class="fa fa-search" style="margin-left:10px;"></i></button>
        
       </span> 
       <div class="inner"> <a href="{{ route('admin.customerreport') }}" class="btn btn-default"  ><i class="fas fa-history"></i>Project History<a></div>
              <div class="inner"> <a href="{{ route('admin.downloadfeedback') }}" class="btn btn-info"  ><i class="fas fa-history"></i>PDF<a></div>
            </form>
         </div>      
    </div>
  </div>
</div>
<br>
           
             
              

                <div class="table-responsive" >
                    <table id="zero_config" class="table table-striped table-bordered">
              
                        <thead>
                            <tr>
                                <th>Project ID</th>
                                <th>Client ID</th>
                                <th>Client Name</th>
                                <th>Rating</th>
                                <th>Review</th>
                                <th>Status</th>
                                <th>Completed Date</th>
                                
                            </tr> 
                        </thead>
                        <tbody>
                        @foreach($myassigns as $myassign)
                            <tr> 
                                <td>{{$myassign->id}}</td>
                                <td>{{$myassign->client_id}}</td>
                                <td>{{$myassign->client_name}}</td>
                                <td>{{$myassign->rating}}/5 Rated</td>
                                <td>{{$myassign->review}}</td>
                                <td>{{$myassign->Status}}</td>
                                <td><time datetime="2008-02-14 20:00" >{{Carbon\Carbon::parse($myassign->created_at)->format('d F Y')}}</time></td>
                               
                            </tr> 
                            @endforeach
                        </tbody>
                        <div class="hidden"  style="display:none;">
                    {{$myassigns->links('pagination::bootstrap-4')}}
                    </div>
                    </table>
                    <div class="text-center" style="margin:0px">  
                    {{$myassigns->links('pagination::bootstrap-4')}}
                    </div>
                    </div> 

                </div>
              
            </div>
        </div>

    </div>

</div>


  


@endsection

 
