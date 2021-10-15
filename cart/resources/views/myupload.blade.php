@extends('layouts.app')
@section('content') 

<body style="margin-top:30px;">

	<div class="container">
<div class="tab-wrap" >

  <input type="radio" id="tab1" name="tabGroup1" class="tab" checked>
  <label for="tab1" >My Upload</label>

  <!--<input type="radio" id="tab2" name="tabGroup1" class="tab">
  <label for="tab2">In bidding</label>-->

  <!--<input type="radio" id="tab3" name="tabGroup1" class="tab">
  <label for="tab3">To Process</label>-->
	
	 <input type="radio" id="tab4" name="tabGroup1" class="tab">
  <label for="tab4">To Process</label>
	
	 <input type="radio" id="tab5" name="tabGroup1" class="tab">
  <label for="tab5">Rated</label>

  <div class="tab__content"  style="min-height:800px;">
  <a href="{{ url('/upload') }}"
				   class="btn btn-success" style="color:white;"><i class="fas fa-plus">Add a New Project</i></a>   
  <a href="{{route('modify')}}" 
				   class="btn btn-success" style="color:white;"><i class="fas fa-edit">Modify</i></a>   <br><br>
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
				 <!--  <td>
				   
				   <a href="{{route('editproject', ['id' => $project->id])}}" 
				   class="btn btn-warning" ><i class="fas fa-edit">Edit</i></a>|   
				   
				   
					   <a href="{{ route('deleteproject', ['id' => $project->id]) }}" 
				  class="btn btn-danger" onclick="return confirm('Sure Want Delete?')">Delete</a>
				  </td>
-->
				   
			   
			   </tr> 
		   @endforeach

                   
                        </tbody>
                       
                    </table>
                   
                    </div>

	      </div>
  </div>

 <!-- <div class="tab__content" style="min-height:800px;">
  <div class="row">
		<div class="table-responsive" >
                    <table id="zero_config" class="table table-striped table-bordered">
              
      <thead>
                            <tr>
				    <th>ID</th>
                    <th>Image</th>
					<th>Location</th>
					<th>Budget</th>
		            <th>Style</th>
                    <th>Size sq.ft</th>
		           
					<th>Total_bidder</th>
                    <th>Check details</th>
                                
                            </tr> 
                        </thead>
                        <tbody>
				@foreach($bids as $bid) 
               
			   <tr>
			
				   <td class="text-center">
				  
				   
				</td>
				<td><img src="{{ asset('thumbnails/') }}/{{$bid->thumbnail}}" alt="" width="50"></td>
				   <td style="max-width:300px">
				   
					   <em class="text-muted">	
					   {{$bid->location}} 	                       
					   </em>

				   </td>
				   <td>RM{{$bid->budget}}</td>
				   <td>{{$bid->style}}</td>
				   <td>sq.ft{{$bid->size}} </td>
				   <td>{{$bid->totalbid}} </td>
				   <td CLASS="text-center">
				   
				   <a href="{{ route('viewdesigner' , ['id' => $bid->id]) }}" style="color:black;text-decoration:none;margin-left:10px;border-radius:200px;" class="btn btn-primary"> <i class="fas fa-eye" style="color:white;"></i></a>
				  
					  
				  </td>
 
				   
			   
			   </tr> 
		   @endforeach

                   
                        </tbody>
                       
                    </table>
                   
                    </div>

	      </div>
  </div>-->

  <!--<div class="tab__content" style="min-height:800px;">
  <div class="row">
		<div class="table-responsive" >
                    <table id="zero_config" class="table table-striped table-bordered">
		        <thead>
		        <tr>
		           
                    <th>ID_Detail_id</th>
                    <th>Designer_ID</th>
					<th>Designer_Name</th>
		            <th>Reserve_Price</th>
					<th>Designer_Contact</th>
                    <th>Action</th>
                     
		        </tr>
		    </thead>
		        <tbody>	
                @foreach($completes as $complete)
               
		            <tr>
                  
		                
                        
		                    <em class="text-muted">	
                                                  
		                    </em>
                   
		                </td> 
						<td> {{$complete->ID_detail_id}}</td>
						<td>{{$complete->design_id}}</td>
						<td>{{$complete->designer_name}}</td>
                        <td>RM {{$complete->reserve_price}}</td>
		                <td>{{$complete->designer_contact}}</td>
                        
		                <td>
						<form action="{{ route('completeproject') }}" method="post" enctype="multipart/form-data">
             @csrf     
			 <input type="hidden" id="p_status" name="p_status" value="Completed">
			 <input type="hidden" id="ID" name="ID" value="{{$complete->id}}">
                        
		                    <button class="btn btn-success" onclick="return confirm('Sure Want Complete Project?')">Complete Project
</button>
                       </td>
    
		                
                    
		            </tr> 
                @endforeach

				
		        </tbody>
		    </table>
</div>
</div>
  </div>-->
	
	<div class="tab__content" style="min-height:800px;">
	<div class="row">
		<div class="table-responsive" >
                    <table id="zero_config" class="table table-striped table-bordered">
		        <thead>
		        <tr>
		           
                    <th>ID_Detail_id</th>
                    <th>Designer_ID</th>
					<th>Designer_Name</th>
		            <th>Reserve_Price</th>
					<th>Designer_Contact</th>
                    <th>Action</th>
                     
		        </tr>
		    </thead>
		        <tbody>	
                @foreach($myassigns as $myassign)
               
		            <tr>
                  
		                
                        
		                    <em class="text-muted">	
                                                  
		                    </em>
                   
		                </td> 
						<td> {{$myassign->ID_detail_id}}</td>
						<td>{{$myassign->design_id}}</td>
						<td>{{$myassign->designer_name}}</td>
                        <td>RM {{$myassign->reserve_price}}</td>
		                <td>{{$myassign->designer_contact}}</td>
                        
		                <td>
                        
                        
		                    <a href="{{ route('feedback' , ['id' => $myassign->id]) }}" class="btn btn-success">Complete Project</a>
                       </td>
    
		                
                    
		            </tr> 
                @endforeach

				
		        </tbody>
		    </table>
</div>
</div>
  </div>
	
	<div class="tab__content" style="min-height:800px;">
    <div class="row">
		<div class="table-responsive" >
                    <table id="zero_config" class="table table-striped table-bordered">
		        <thead>
		        <tr>
		           
                    <th>ID_Detail_id</th>
                    <th>Designer_ID</th>
					<th>Designer_Name</th>
		            <th>Reserve_Price</th>
					<th>Designer_Contact</th>
                    <th>Status</th>
                     
		        </tr>
		    </thead>
		        <tbody>	
                @foreach($rates as $rate)
               
		            <tr>
                  
		                
                        
		                    <em class="text-muted">	
                                                  
		                    </em>
                   
		                </td> 
						<td> {{$rate->ID_detail_id}}</td>
						<td>{{$rate->design_id}}</td>
						<td>{{$rate->designer_name}}</td>
                        <td>RM {{$rate->reserve_price}}</td>
		                <td>{{$rate->designer_contact}}</td>
                        
		                <td>
                        
                        
		                    <a href="#" class="btn" style="background-color:#EE4D2D;color:#fff;">{{$rate->Status}}</a>
                       </td>
    
		                
                    
		            </tr> 
                @endforeach

				
		        </tbody>
				
		    </table>
			<!--<div class="text-align">
                    {{$rates->links('pagination::bootstrap-4')}}
                   </div>-->
</div>
</div>
  </div>

</div>
<!--
<div  style="margin-top:50px;">
<div class="container">
<button type="button" class="collapsible">My Upload</button>
<div class="content">
<div class="col-12">
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
				   <td>pending</td>
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
       </div>
</div>
<button type="button" class="collapsible">To Process</button>
<div class="content">
<div class="col-12">
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
				   <td>pending</td>
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
       </div>
</div>
<button type="button" class="collapsible">Completed</button>
<div class="content">
<div class="col-12">
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
				   <td>pending</td>
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
       </div>
</div>
</div>
</div>
</section>



<div class="container" style="margin-top:100px;">

<div class="col-12">
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
				   <td>pending</td>
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
       </div>
    </div>-->

</body>
@endsection
