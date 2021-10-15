@extends('layouts.adminlayout')
@section('content')

<!--All Css Here-->

	<!-- Bootstrap CSS-->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<!-- Style CSS -->
	<link rel="stylesheet" href="style.css">
	<!-- Responsive CSS -->
	<link rel="stylesheet" href="css/responsive.css">
	<!-- Modernizr Js -->
	<script src="js/vendor/modernizr-2.8.3.min.js"></script>

<body>

<div class="container">
		        <div class="row">
                    <!--Contact Form Start--> 
		            <div class="col-md-7">
		                <div class="contact-form">
		                    <div class="contact-form-title">
		                        <h3>Insert Details</h3>
							
		                    </div>
		          
                    <form id="contact-form" method="post" action="{{route('admin.insertclientproject')}}" enctype="multipart/form-data">
                    @csrf <!-- very important if you didn't insert CSRF, it not allow submit the data-->
                    
                 @foreach($projects as $project)
                 
                    <input type="hidden" name="client_id" value="{{$project->client_id}}"  required>
                    <input type="hidden" name="client_name" value="{{$project->client_name}}"  required>
                    <input type="hidden" name="client_contact" value="{{$project->client_contact}}" required>
                    <input type="hidden" name="status" value="Approved"  required> 
  
                    <div class="row">
		                <div class="col-md-6">
		                    <div class="single-input">

                        <input type="hidden" name="ID" id="ID" value="{{$project->id}}" readonly class="form-control">
                       

                        <label for="location" class="label">Location</label><br>
                        <input type="text" name="location" id="location" value="{{$project->location}}" required>
                     
                   
                        <label for="budget" class="label">Budget</label><br>
                        <input type="text" name="budget" id="budget" value="{{$project->budget}}" required>


                   
                       <label for="style" class="label">Style</label><br>
                       <input type="text" name="style" id="style" value="{{$project->style}}" required>
                       

                  
                        <label for="description" class="label">Description</label><br>
                        <input type="text" name="description" id="description"  value="{{$project->description}}" required></textarea>
                       
                    
                   
                        <label for="size" class="label">Size</label><br> 
                        <input type="number" name="size" id="size" value="{{$project->size}}" required>
                        

                   
                        <label for="latitude" class="label">Latitude</label><br> 
                        <input type="text" name="latitude" id="latitude"  required>
                       

                    
                        <label for="longitude" class="label">Longitude</label><br> 
                        <input type="text" name="longitude" id="longitude" required>
                    
                 </div>
            </div>
         </div>
                    <p> 
                    <img src="{{ asset('thumbnails/') }}/{{$project->thumbnail}}" alt="" width="200">
                        <input type="hidden" style= "margin:auto;" class="form-control" name="thumbnailName" value="{{$project->thumbnail}}">
                    </p>
                
                    <p> 
                        <input type="submit" name="insert" value="Insert" class="Insert btn-primary" >
                    </p>
                    @endforeach

                  </div>
              </div>
           </div>
         </div>
      </div>
                    </form>
                 
            <body>

@endsection

