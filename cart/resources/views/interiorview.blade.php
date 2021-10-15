@extends('layouts.app')
@section('content') 
@if(Session::has('success'))           
        <div class="alert alert-success" role="alert">
            {{ Session::get('success')}}
        </div>      
 @endif 
 <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
 
 <body class="interiorview">
<div class="row">
        @foreach($interiors as $interior)
        
        <div class="col-sm-4">
            <div class="card"> 
                <div class="card-body"> 
                    <h5 class="card-title"> </h5>  
                    <img src="{{ asset('images/') }}/{{$interior->image}}" class="img-fluid" width="500" height="500">
                    <div class="card-heading"><b> {{$interior->design}} </b>
                    <br>Skill- {{$interior->skill}} 
                    <br>Experience- {{$interior->experience}} years
                    <br>Certificate- {{$interior->certificate}} 
                    <form method="post" action="mailto:lol123@gmail.com" >
                    <br><button class="btn btn-primary btn-xs width=100%" button style="width: 100%;">Email</button></div>
                    </form>
                </div>
                
            </div>
        </div>
        @endforeach
    </div>
</body>
@endsection