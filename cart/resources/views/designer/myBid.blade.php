@extends('layouts.designer')
@section('designer_content')  

	<!--main area-->

	
	
<br>
		<div class="col-lg-12 col-md-8 col-sm-8 col-xs-12" >
					<div class="wrap-product-detail">
						<div class="detail-media">
							<div class="product-gallery">
							 


							
							</div>
						</div>
						<div class="detail-info">
							
                           
                            <div class="short-desc">
                                <ul>
                                    
                            </div>
                            
						</div>
						<div class="advance-info">
							<div class="tab-control normal">
								<a href="#description" class="tab-control-item active">My Bid</a>
								<a href="#add_infomation" class="tab-control-item">To Process Project</a>
								<a href="#review" class="tab-control-item">Completed Project</a>
							</div>
					<div class="tab-contents">
					<div class="tab-contents">
								<div class="tab-content-item active" id="description">
								<div class="table-responsive" >
                    <table id="zero_config" class="table table-striped table-bordered">
								<thead>
									<tr>
                           <th>Project ID</th>
                           <th>Bid Amount</th>
                           <th>Comment</th>
                           <th>Bid Date</th>
                           <th>Status</th>
                              </tr>
                         </thread>
                         <tbody>
                       @foreach($bids as $bid)
                      <tr>
                     <td>{{$bid->project_id}}</td>
                     <td>{{$bid->bidamount}}</td>
                     <td>{{$bid->comment}}</td>
                     <td><time datetime="2008-02-14 20:00" >{{Carbon\Carbon::parse($bid->created_at)->format('d F Y')}}</time></td>
                     <td class="text-center">
                                        <span class="label label-success">{{$bid->status}}</span>
                                    </td>
                     </tr>
                    @endforeach
                   </tbody>
                   </table>
</div>
								</div>
								<div class="tab-content-item " id="add_infomation">
									<div class="row">
									<div class="table-responsive" >
                    <table id="zero_config" class="table table-striped table-bordered">
			<thead>
                            <tr>
                                <th>ID_detail_id</th>
                                <th>Client ID</th>
                                <th>Client Name</th>
                                <th>Reserve_price</th>
                                <th>Client_contact</th>
                                <th>Status</th>
                                
                            </tr> 
                        </thead>
                        <tbody>
                        @foreach($myassigns as $myassign)
                            <tr> 
                                <td>{{$myassign->ID_detail_id}}</td>
                                <td>{{$myassign->client_id}}</td>
                                <td>{{$myassign->client_name}}</td>
                                <td>{{$myassign->reserve_price}}</td>
                                <td>{{$myassign->client_contact}}</td>
                                <td class="text-center">
                                        <span class="label label-success">To process</span>
                                    </td>
                               
                            </tr> 
                            @endforeach
                        </tbody>
		    </table>
		</td>
	</tr>
</div>
</div>
								</div>
								<div class="tab-content-item " id="review">
									<div class="row">
									<div class="table-responsive" >
                    <table id="zero_config" class="table table-striped table-bordered">
			<thead>
                            <tr>
                                <th>ID_detail_id</th>
                                <th>Client Name</th>
                                <th>Rating</th>
                                <th>Review</th>
								<th>Project done by</th>
								<th>Total Receive Amount</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr> 
                        </thead>
                        <tbody>
                        @foreach($mys as $my)
                            <tr> 
                                <td>{{$my->ID_detail_id}}</td>
                                <td>{{$my->client_name}}</td>
                                <td>{{$my->rating}}/5 Rated</td>
                                <td>{{$my->review}}</td> 
								<td>{{$my->designer_name}}</td> 
								<td>RM {{$my->reserve_price - $my->reserve_price/100 *6}} </td>
								<td class="text-center">
                                        <span class="label label-success">Completed</span>
                                    </td>
									<td class="text-center"><a href="{{ route('designer.findrecord', ['id' => $my->id]) }}" class="btn btn-success">View Details</a></td>
                               
                            </tr> 
                            @endforeach
                        </tbody>
		    </table>
		</td>
	</tr>
</div>
</div>							
		

	

@endsection
<link href="{{ asset('assets/css/style.css') }}" rel="stylesheet" type="text/css" >
<link href="{{ asset('assets/css/color-01.css') }}" rel="stylesheet" type="text/css" >
  <link href="{{ asset('assets/css/flexslider.css') }}" rel="stylesheet" type="text/css" >
  <link href="{{ asset('assets/css/chosen.min.css') }}" rel="stylesheet" type="text/css" >