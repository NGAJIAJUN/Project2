@extends('layouts.app')
@section('content') 
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Interior design</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

      
           
</style>

    </head>
    <script>
  var loadFile = function(event) {
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
    output.onload = function() {
      URL.revokeObjectURL(output.src) // free memory
    }
  };
</script>
    <body class="upload"> 
        <div class="container" style="border-radius:10px 10px 10px 10px;">
              <div class="card my-2 p-2" id="p-2">
              <div class="text-center">
                    <form class="subform"  method="post" action="{{route('addProject')}}" enctype="multipart/form-data">
                    @csrf <!-- very important if you didn't insert CSRF, it not allow submit the data-->
                     
                        <input type="hidden" name="client_id" value="{{Auth::user()->id}}"  required>
                        <input type="hidden" name="client_name" value="{{Auth::user()->name}}"  required>
                        <input type="hidden" name="client_contact" value="{{Auth::user()->contact}}" required>

                    <p> 
                        
                        <input type="file" class="form-control" name="thumbnail-img" value="" required>
                    </p>
                    <p>
                        <label for="location" class="label">Location</label><br>
                        <input type="text" name="location" id="location" required>
                    </p>
                    <p>
                        <label for="budget" class="label">Budget</label><br>
                        <input type="text" name="budget" id="budget" required>
                    </p>
                    <p>
                       <label for="style" class="label">Style</label><br>
                       <input type="text" name="style" id="style" required>
                        
                    </p>
                    <p>
                        <label for="description" class="label">Description</label><br>
                        <textarea type="text" name="description" id="description"  required></textarea>
                    </p>
                    
                    <p>
                        <label for="size" class="label">Size</label><br> 
                        <input type="number" name="size" id="size" required>
                    </p>
                    
                    <p> 
                        <input type="submit" name="insert" value="Insert" class="Insert btn-primary" >
                    </p>
                    </form>
                </div>
            </div>
            <body>
@endsection