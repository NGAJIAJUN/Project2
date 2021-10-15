@extends('layouts.app')
@section('content') 

<div class="my-upload">
<div class="container">
	    <div class="row">
		    <table class="table table-hover table-striped">
		        <thead>
		        <tr class="thead-dark">
		           
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
                        
                        
		                    <a href="{{ route('feedback' , ['id' => $myassign->id]) }}" class="btn btn-success">Write a Review</a>
                       </td>
    
		                
                    
		            </tr> 
                @endforeach

				
		        </tbody>
		    </table>
		


@endsection
