@extends('layouts.app')
@section('content') 
<body style="margin-top:70px;">

<div class="container">
<div class="row">
		<div class="table-responsive" >
                    <table id="zero_config" class="table table-striped table-bordered">
              
      <thead>
                            <tr>
				    <th>ID</th>
                    <th>Thumbnail</th>
		            <th>Style</th>
                    <th>Location</th>
		            <th>Budget</th>
		            <th>Description</th>
                    <th>Size</th>
					<th>Status</th>
                    <th>Action</th>
                                
                            </tr> 
                        </thead>
                        <tbody>
						@foreach($projects as $project) 
               
			   <tr>
			 
				   <td>{{$project->id}}</td>
				   <td><img src="{{ asset('thumbnails/') }}/{{$project->thumbnail}}" alt="" width="50"></td>
				   <td style="max-width:300px">
				   
					   <em class="text-muted">	
					   {{$project->style}} 	                       
					   </em>

				   </td>
				   <td>{{$project->location}}</td>
				   <td>RM{{$project->budget}} </td>
				   <td>{{$project->description}} </td>
				   <td>{{$project->size}}sq. ft</td>
				   <td>{{$project->status}}</td>
				 <td>
				   
				   <a href="{{route('editproject', ['id' => $project->id])}}" 
				   class="btn btn-warning" ><i class="fas fa-edit">Edit</i></a>|   
				   
				   
					   <a href="{{ route('deleteproject', ['id' => $project->id]) }}" 
				  class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</a>
				  </td>

				   
			   
			   </tr> 
		   @endforeach

                   
                        </tbody>
                       
                    </table>
                   
                    </div>

	      </div>

</body>
@endsection