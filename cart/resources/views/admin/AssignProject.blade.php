@extends('layouts.adminlayout')
@section('content')

<style>
* {
  font-family: sans-serif; /* Change your font family */
}

.content-table {

  border-collapse: collapse;
  margin: 25px 0;
  font-size: 0.9em;
  min-width: 400px;
  border-radius: 5px 5px 0 0;
  overflow: hidden;
  box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
}

.content-table thead tr {
  background-color: #009879;
  color: #ffffff;
  text-align: left;
  font-weight: bold;
}

.content-table th,
.content-table td {
  padding: 12px 15px;
}

.content-table tbody tr {
  border-bottom: 1px solid #dddddd;
}

.content-table tbody tr:nth-of-type(even) {
  background-color: #f3f3f3;
}

.content-table tbody tr:last-of-type {
  border-bottom: 2px solid #009879;
}

.content-table tbody tr.active-row {
  font-weight: bold;
  color: #009879;
}

</style>
<div class="my-upload"> 
<div class="container">
<div class="col-lg-12 col-6">

	    <div class="row">
		    <table class="table table-hover content-table">
		        <thead>
		        <tr>
				   
                <th>ID_Detail_id</th>
		            <th>Designer_ID</th>
		            <th>Reserve_Price</th>
				        <th>Status</th>
					
					<th></th>
					
                    <th>Action</th>
					
                    
		        </tr>
		    </thead>
		        <tbody>	
               
		            <tr>
                        
		                    <em class="text-muted">	
                                                  
		                    </em>

		                </td>
						@foreach($myassigns as $myassign)
					
            <td>{{$myassign->ID_detail_id}}</td>
						<td>{{$myassign->design_id}}</td>
            <td>RM {{$myassign->reserve_price}}</td>
             <td>Assigned</td>
						
						<td></td>
		                <td> 
 
 <!-- Button trigger modal --> 

<button type="button"  class="btn btn-primary"  data-toggle="modal" data-target="#exampleModalCenter"  >
Check details    
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
          Designer Info<br>
          ID:<input class="form-control hidden" type="text" value="{{ $myassign->design_id }}" disabled>
          Name:<input class="form-control hidden" type="text" value="{{$myassign->designer_name}}" disabled>
          Contact:<input class="form-control hidden" type="text" value="{{$myassign->designer_contact}}" disabled>
          <br>
          Client Info<br>   
          ID:<input class="form-control hidden" type="text" value="{{$myassign->client_id}}" disabled>
          Name:<input class="form-control hidden" type="text" value="{{$myassign->client_name}}" disabled>
          Contact:<input class="form-control hidden" type="text" value="{{$myassign->client_contact}}" disabled> 
         
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>             
			 
		                
                    
		            </tr> 
                @endforeach
				
		        </tbody>
		    </table>
		
</div>
	</div>
    </div>
    </div>

@endsection