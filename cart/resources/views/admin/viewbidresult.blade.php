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
                <br>
				<a href="{{ route('admin.downloadPDF') }}"
                        class="btn btn-primary" style="text-align:center;"><i class="fas fa-edit">Print as PDF</i></a>  
			    <br>

	    <div class="row">
		    <table class="table table-hover content-table">
		        <thead>
		        <tr>
				   
		                <th>Project_ID</th>
                    <th>Designer_ID</th>
                    <th>Designer_Name</th>
		                <th>Bid Amount</th>
                    <th>Comment</th>
				            <th>Status</th>
					
					<th></th>
					
                    <th>Action</th>
					
                    
		        </tr>
		    </thead>
		        <tbody>	
         @foreach($bids as $bid)
               
		            <tr>
                        
		                    <em class="text-muted">	
                                                  
		                    </em>

		                </td>
						
                    <td value="{{$bid->project_id}}">{{$bid->project_id}}</td>
                    <td value="{{$bid->design_id}}">{{$bid->design_id}}</td> 
                    <td value="{{$bid->design_id}}">{{$bid->designer_name}}</td> 
		                <td value="{{$bid->bidamount}}">RM{{$bid->bidamount}} </td>
                    <td value="{{$bid->comment}}">{{$bid->comment}}</td>
                    <td>Pending</td>
					        	<td></td>
		                <td> 
    
      <form action="{{ route('admin.assignresult') }}" method="post" enctype="multipart/form-data">
             @csrf   


       <input type="hidden" id="ID_detail_id" name="ID_detail_id" value="{{$bid->id}}">

       <input type="hidden" id="design_id" name="design_id" value="{{$bid->design_id}}">

       <input type="hidden" id="designer_name" name="designer_name" value="{{$bid->designer_name}}">

       <input type="hidden" id="designer_contact" name="designer_contact" value="{{$bid->designer_contact}}">

       <input type="hidden" id="client_id" name="client_id" value="{{$bid->client_id}}">

       <input type="hidden" id="client_name" name="client_name" value="{{$bid->client_name}}">

       <input type="hidden" id="client_contact" name="client_contact" value="{{$bid->client_contact}}">

       <input type="hidden" id="reserve_price" name="reserve_price" value="{{$bid->bidamount}}">

       <input type="hidden" name="status" value="Approved">

       <input type="hidden" name="item[]" value="{{$bid->id}}">
      
			 <button type="submit" class="btn btn-success">
       <i class="fas fa-edit">Assign </i></button> | 
       
       <a href="{{ route('admin.deletebidresult', ['id' => $bid->id]) }}" 
                        class="btn btn-danger" ><i class="fas fa-edit" onclick="return confirm('Sure Want Reject?')">Reject</i></a> 
     </form>
					 
		                    
    
		                
                    
		            </tr> 
                @endforeach
				
				
		        </tbody>
		    </table>
		
</div>
	</div>
    </div>
    </div>

@endsection