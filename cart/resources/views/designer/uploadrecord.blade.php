@extends('layouts.designer')
@section('designer_content')  
<script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
<br>
<div class="col-md-12">
    
<div class="card my-4 p-4" id="p-4">
<b>Project Completed</b>

   
<div class="col-8">
<div class="row">
<div class="card-body">NOTE: Designers require upload images about the design into files.
</div></div>
</div>
</div>
</div>

<div class="col-md-12">
<div class="card my-4 p-4" id="p-4">

                    <form class="form-group"  method="post" action="{{ route('designer.uploadrecord')}}" enctype="multipart/form-data" >
                    @csrf <!-- very important if you didn't insert CSRF, it not allow submit the data-->
                    
                    @foreach($uploads as $upload)
                        <input type="hidden" name="ID_detail_id" id="ID_detail_id" value="{{$upload->ID_detail_id}}" readonly class="form-control">
                        
                        <label></label>
                        <input type="hidden" name="design_id" id="design_id" value="{{$upload->design_id}}" readonly class="form-control">
                        <input type="hidden" name="designer_name" id="designer_name" value="{{$upload->designer_name}}" readonly class="form-control">
                        <input type="hidden" name="client_id" id="client_id" value="{{$upload->client_id}}" readonly class="form-control">
                        <input type="hidden" name="client_name" id="client_name" value="{{$upload->client_name}}" readonly class="form-control">
                        <input type="hidden" name="client_contact" id="client_contact" value="{{$upload->client_contact}}" readonly class="form-control">
                        <input type="hidden" name="rating" id="rating" value="{{$upload->rating}}" readonly class="form-control">
                        <input type="hidden" name="review" id="review" value="{{$upload->review}}" readonly class="form-control">
                        <input type="hidden" name="reserve_price" id="reserve_price" value="{{$upload->reserve_price}}" readonly class="form-control">
                        <input type="hidden" name="fee" id="fee" value="{{$upload->reserve_price/100 *6}}" readonly class="form-control">
                        <input type="hidden" name="completeamount" id="completeamount" value="{{$upload->reserve_price - $upload->reserve_price/100 *6}}" readonly class="form-control">
            
                      
                    <b><i class="fas fa-hashtag"></i> ID_detail_id</b>
                    <ul style="margin-left:-15px;list-style:none;">
                    <ol>{{$upload->ID_detail_id}}</ol>
                   </ul>
                  
                   <b><i class="far fa-file-alt"></i></i> Client detail</b>
                    <ul style="margin-left:-15px;list-style:none;">
                    <ol>id-{{$upload->client_id}}, {{$upload->client_name}}</ol>
                    
                    <ol>{{$upload->client_contact}}</ol>
                   </ul>
                   <b><i class="far fa-file-alt"></i></i> Project Information</b>
                  
                    <ul style="margin-left:-15px;list-style:none;">
                    
                    <ol>Rating -: {{$upload->rating}}/5 Rated</ol>
                    <ol>Comment -: {{$upload->review}}</ol>
                   
                   </ul>

                   <b><i class="far fa-file-alt"></i></i> Project Done By</b>
                    <ul style="margin-left:-15px;list-style:none;">
                    <ol>{{$upload->designer_name}}</ol>
                   </ul>
                   <b><i class="far fa-file-image"></i> Image</b>
                 
                    <ul style="margin-left:-15px;list-style:none;">
                  

                    <input type="file" class="form-control" name="img-1" value="" required>
                    <input type="file" class="form-control" name="img-2" value="" required>
                    <input type="file" class="form-control" name="img-3" value="" required>
                   
                   </ul> 
                   <hr>
                 
                    <ul style="list-style:none;float:right;"><i class="fas fa-info-circle" style="float:left;margin-top:5px;space-between:10px;"></i> Income details<br><br>
                    <li style="float:right;">RM {{$upload->reserve_price}}</li><li style="margin-left:-100px;"> Subtotal</li>
                    <li style="float:right;"><b>- </b>RM {{$upload->reserve_price/100*6}}</li><li style="margin-left:-100px;">Fee</li><br>
                    <li style="float:right;">RM {{$upload->reserve_price - $upload->reserve_price/100*6}}</li><li style="margin-left:-100px;">Total Income
                    
                   </ul>
                   <hr style="margin-top:50px;">
                   <hr style="margin-top:70px;">
<br><br>
<input type="hidden" name="item[]" value="{{$upload->id}}" required>
<input type="hidden" name="c_status" value="done" required>
                       <!--<button type="submit" class="btn btn-success">Submit</button>-->
                       <button type="submit" class="btn btn-info" style="float:right;margin-bottom:25px;">Submit</button>
                    </form>
                    <hr style="margin-top:-90px;">
                    <br>
                    @endforeach
                    
                    </div>
                    
                </div>
</div>
</div>
@endsection