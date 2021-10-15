@extends('layouts.adminlayout')
@section('content')

<div class="my-upload"> 
<div class="container"> 
<div class="col-lg-12 col-6">
                   
					<br>
					<a href="{{ route('admin.viewbidresult') }}"
                        class="btn btn-primary" ><i class="fas fa-edit">View All bid result</i></a> 
						<br>
									
	    <div class="row">
		    <table class="table table-hover content-table">
		        <thead>
		        <tr>
		            <th>ID</th>
                    <th>Thumbnail</th>
		            <th>Style</th>
                    <th>Location</th>
		            <th>Budget</th>
		            <th>Description</th>
                    <th>Size</th>
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
		                <td>
                        
					
                     
		                    <a href="{{ route('admin.deleteinsertproject', ['id' => $project->id]) }}" 
                       class="btn btn-danger" onclick="return confirm('Sure Want Delist?')">Delist</a>
                       </td>
    
		                
                    
		            </tr> 
                @endforeach

				
		        </tbody>
		    </table>
		
</div>
	</div>
    </div>
    </div>

@endsection