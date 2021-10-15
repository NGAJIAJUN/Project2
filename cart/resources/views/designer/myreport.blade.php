@extends('layouts.designer')
@section('designer_content')  
<br>
<div class="breadcrumb-holder">
        <div class="container-fluid">
           
        </div>
    </div>
    
    <section class="forms">
        <div class="container-fluid">
          
        
        <div class="card" style="min-height:auto;">
      <div class="card-body">

@foreach($totalprojects as $totalproject)
<label for="ID" class="label">Designer ID</label><br>
 <input type="text" name="ID" id="ID" value="{{$totalproject->id}}" readonly class="form-control">

 <label for="ID" class="label">Designer Name</label><br>
 <input type="text" name="ID" id="ID" value="{{$totalproject->name}}" readonly class="form-control">
 
@endforeach 
 
@foreach($currentprojects as $currentproject)
<label for="current" class="label">Current Project</label><br>
 <input type="text" name="current" id="current" value="{{$currentproject->crtproject}}" readonly class="form-control">

@endforeach

@foreach($completedprojects as $completedproject)
<label for="complete" class="label">Completed Project</label><br>
 <input type="text" name="complete" id="complete" value="{{$completedproject->cpdproject}}" readonly class="form-control">
@endforeach

 <div class="table-responsive" >
            <table id="example" class="table table-striped table-bordered nowrap" style="width:100%:border-radius:5px 5px 5px 5px;">
                <thead> 
                    <tr>
                        <th>Project ID</th>
                        <th>ID_detail_id</th>
                        <th>Reserve Price</th>
                        <th>Rating</th>
                        <th>Comment</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                @foreach($designerreports as $drs)
                    <tr>
                    <td >{{$drs->ID_detail}}</td>
                        <td >{{$drs->ID_detail}}</td>
                        <td >RM{{$drs->price}}</td>
                        <td>{{$drs->rate}}</td>
                        <td>{{$drs->comment}}</td> 
                        <td>{{$drs->p_status}}</td> 
                        
                       
                    </tr>
                @endforeach
                
                </tbody>
              
            </table>  
            </div>
        </div>
</div>
</div>
@endsection