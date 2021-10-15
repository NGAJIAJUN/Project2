@extends('layouts.designer')
@section('designer_content')  


<br>
<!--<div class="container">-->

        <div class="col-md-12">
                <div class="card-header" style=" background-color:#fff; border-radius:5px 5px 0px 0px; text-align:center;padding-bottom:10px;"><h3>{{ __('My Rating') }}</h3></div>
                <div class="card-body"style="  background-color:#fff;">
                <div class="row">
                <div class="col-sm-12 text-center">
    					<h1 class="text-warning mt-4 mb-4">
  
              
                       @foreach($mys as $my)             
    						<b><span id="average_rating"></span>{{$my->totalrating+0}} / 5</b>
                            
    					</h1>
    					<div class="mb-3">
                        <div class="star-rating"> 
				<i class="fas fa-star"><span class="width-{{$my->totalrating * 20}}-percent">Rated <strong class="rating"></strong> </span></i>
					</div>
	    				</div>
                        
    					<h3><span id="total_review"></span> {{$my->totalreview}} Review</h3>
    				</div>
                

                <div class="comment-text" style="padding-top:30px;">
              
              </div>
          </div>
@endforeach
            <hr>
            @foreach($myassigns as $myassign)  
          
                <div class="card-body">
                <div class="row">
				<img src="/images/usericon.png" height="70" width="70" style="margin-right:10px;">
         
			<div class="comment-text">
            
            <strong class="woocommerce-review__author">{{$myassign->client_name}}</strong> <br>
				<div class="star-rating">
				<i class="fas fa-star"><span class="width-{{ $myassign->rating * 20 }}-percent">Rated <strong class="rating">{{ $myassign->rating }}</strong> </span></i>
					</div>
			<div class="meta"> 
                 <div class class="woocommerce-review__dash">Interior Design detail ID: {{$myassign->ID_detail_id}}</div>
                 <div class="description">
			      <p>{{$myassign->review}}</p>
                
	             </div>
                 <!--<img src="/images/living.jpg" height="70" width="70" style="margin-right:10px;"><img src="/images/1.jpg" height="70" width="70"--><br>
				<time class="woocommerce-review__published-date" datetime="2008-02-14 20:00" >{{Carbon\Carbon::parse($myassign->created_at)->format('d F Y H:i:s')}}</time>
          </div>

	</div>
  
</div>

</div><!-- #comments -->
<hr>
            

  
      
      
                
                
@endforeach
<div style="margin:auto;">
                    {{$myassigns->links('pagination::bootstrap-4')}}
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</div>
      
				
</div>
</div>


@endsection
