@extends('layouts.app')
@section('content') 

<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.10.2/css/all.css" />

<div class="my-upload">

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><h3>{{ __('Rate/Comment') }}</h3></div>

                <div class="card-body">
                   

                 @foreach($myassigns as $myassign)
                <b>ID_detail_id: </b> {{$myassign->ID_detail_id}} <br> <b>designer name: </b>{{$myassign->designer_name}}
                 <hr>
                

                 <h3>Your rating</h3>
        <form action="{{ route('rate') }}" method="post" enctype="multipart/form-data">
             @csrf   
       <input type="hidden" name="ID" id="ID" value="{{$myassign->id}}" readonly class="form-control">
       <input type="hidden" name="review_status" id="review_status" value="{{$myassign->review}}" readonly class="form-control">
       <input type="hidden" name="item[]" id="item[]" value="{{$myassign->id}}" readonly class="form-control">
       <input type="hidden" name="p_status"  value="Completed" readonly class="form-control">
       @endforeach
      
        <div class="star-rating">
            <div class="star-input"> 
            
               <input type="radio" name="rating" id="rating-1" value="5">
                <label for="rating-1" class="fas fa-star"></label>
                <input type="radio" name="rating" id="rating-2" value="4">
                <label for="rating-2" class="fas fa-star"></label>
                <input type="radio" name="rating" id="rating-3" value="3">
                <label for="rating-3" class="fas fa-star"></label>
                <input type="radio" name="rating" id="rating-4" value="2">
                <label for="rating-4" class="fas fa-star"></label>
                <input type="radio" name="rating" id="rating-5" value="1">
                <label for="rating-5" class="fas fa-star"></label>
                <textarea type="text"  style="visibility:hidden;" rows="1" cols="100"></textarea>
            </div></div>  
              

               <h3>Your Review</h3> 
           
                <textarea type="text"  rows="5" cols="100" name="review" ></textarea>
                <div class="star-rating">
            <div class="star-input"> 
                <input type="hidden" name="Status" id="Status" value="Rated" readonly class="form-control">

                <!-- Rating Submit Form -->
                    <button type="submit" class="btn btn-success">Done</button>
                </form>
                
                </div>
            </div>
        </div>
    </div>
</div>
      
				
</div>
</div>


@endsection
