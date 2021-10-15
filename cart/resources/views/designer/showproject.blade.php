@extends('layouts.designer')
@section('designer_content')   

<div class="container">
<div class="row" >
        @foreach($projects as $project)       
     <div class="col-6">
    
                   <div id="demo" style="font-size:30px; text-align:left;"></div>
                    <p></p> 
                    <img src="{{ asset('thumbnails/') }}/{{$project->thumbnail}}" alt="" width="530px"  class="img-fluid"></div>
                    <div class="col-6"><br>
  @if($errors->any())
  @foreach($errors->all() as $error)
  <div class="alert alert-danger" role="alert">
  Error, please try again later!
  </div>
  @endforeach
  @endif
                    <div style="height: 40px"><b>Location:</b> {{$project->location}} 
                    </div>
                    <div style="height: 40px; float: float-left;"><b>Client Budget: </b> RM{{$project->budget}}</div><br>

                    <div  style="height: 30px;"><b>Description:</b> {{$project->description}}</div> <br><br>
                  
               <form action="{{ route('designer.addbid') }}" method="post" enctype="multipart/form-data">
                       @csrf
                    
                    
                    <input type="hidden" id="project_id" name="project_id" value="{{$project->id}}">
  
                    <input type="hidden" id="client_id" name="client_id" value="{{$project->client_id}}">

                    <input type="hidden" id="client_name" name="client_name" value="{{$project->client_name}}">

                    <input type="hidden" id="client_contact" name="client_contact" value="{{$project->client_contact}}">

                    <div style="height: 50px"><b>Bid Amount RM:</b><input type="number" width="10px" name="bidamount" id="bidamount" required></div>
                    
                    <div style="height: 120px "><b>Comment: </b></br><textarea type="text" rows="5" cols="5" name="comment" id="comment" placeholder="Comment about your skill and experience" required></textarea> 
                    
                     <button type="submit" style="margin-right:50px; width:70%;" class="btn btn-success">Place Bid</button></div>
               </form>
               
        @endforeach     
	</div>
    
@endsection  