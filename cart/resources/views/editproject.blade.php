@extends('layouts.app')
@section('content') 
 

<body class="upload">
        <div class="upload-container">
            <div>
            <div class="card my-2 p-2" id="p-2">
                <div style="text-align:center"> 
                    <form class="form-group"  method="post" action="{{ route('updateproject') }}" enctype="multipart/form-data" >
                    @csrf <!-- very important if you didn't insert CSRF, it not allow submit the data-->
                    <p>
                        <h3 Style="text-align:center;">Edit Product</h3>
                    </p>
                    @foreach($projects as $project)

                    <p>
                        <label for="ID" class="label">Project ID</label><br>
                        <input type="text" name="ID" id="ID" value="{{$project->id}}" readonly class="form-control">
                    </p>
                    <p>
                        <label for="location" class="label">Location</label><br>
                        <input type="text" name="location" id="location" value="{{$project->location}}" class="form-control">
                    </p>
                    <p>
                        <label for="budget" class="label">Budget</label><br>
                        <input type="text" name="budget" id="budget" value="{{$project->budget}}" class="form-control">
                    </p>
                   
                    <p>
                        <label for="style" class="label">Style</label><br>
                        <input type="text" name="style" id="style" value="{{$project->style}}" class="form-control">
                    </p>

                    <p >
                        <label for="description" class="label" style = "position:relative; left:-10px; top:2px;">Description</label><br>
                        <textarea type="text" style = "margin:auto;" name="description" id="description"  class="form-control" width="100%" required >{{$project->description}}    
                       </textarea>
                    </p>

                    <p>
                        <label for="size" class="label">Size</label><br>
                        <input type="number" name="size" id="size" value="{{$project->size}}" class="form-control">
                    </p> 

                    <p>
                        <input type="file" name="thumbnail-img" placeholder="">
                    </p>

                    @endforeach
                        <p style="text-align:center">
                            <input type="submit" name="edit" value="edit" class="btn btn-secondary" style="width:30%">
                        </p>
                    </form>
                    </div>
                </div>
            
@endsection

