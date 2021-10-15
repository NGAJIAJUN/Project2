@extends('layouts.designer')
@section('designer_content')  
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel = "icon" href =  "image/logotitle.ico"  type = "image/x-icon"> 
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ ('Interior Design searching system') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

   
</head>

<!--style-->
<style>
  
    #map {
  height: 450px;
  /* The height is 400 pixels */
  width: 80%;
  /* The width is the width of the web page */
  margin: 0 auto;
  
}


</style>

<body>

  

 <script>
      // Initialize and add the map
      function initMap() {
        // The location of Uluru
        const uluru = { lat: 1.5352442908787902, lng: 103.70996686837324 };
        // The map, centered at Uluru
        const map = new google.maps.Map(document.getElementById("map"), {
          zoom: 12,
          center: uluru,
        });
        // The marker, positioned at Uluru
        /*
        const marker = new google.maps.Marker({
          position: uluru,
          map: map,
        });
        */

        //add Marker
        function addMarkers(property){
          const marker = new google.maps.Marker({
          position: property.location,
          map: map,
        });

        const detailsWindow = new google.maps.InfoWindow({
        content: property.content
        
        });

        marker.addListener("click",()=>{
          detailsWindow.open(map,marker);
        })

        }
         
        const longitude = [];
        const latitude = [];
        const location = [];
        const budget = [];
        const style = [];

    @foreach ($projects as $project)
        longitude.push('{{ $project->longitude }}');
        latitude.push('{{ $project->latitude }}');
        location.push('{{ $project->location}}');
        budget.push('{{ $project->budget}}');
        style.push('{{ $project->style}}');
    @endforeach

    for (let i = 0 ; i < longitude.length;i++){
    addMarkers({location:{lat:parseFloat(latitude[i]),lng:parseFloat(longitude[i] )},content:("Location: " + location[i]) + ("<br>Budget (RM): " + budget[i]) + ("<br>Style: " + style[i]) })
    }

    

}
    </script>
    
<body>
<div style="margin-top:30px;background-color:white;">
    <!--The div element for the map -->
    <div id="map"></div>

    <!-- Async script executes immediately and must be after any DOM elements used in callback. -->
    <script async
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBkkKvcXeg0bLlfHjsa9IB3hxsL74Q676w&callback=initMap">
    </script>

<div class="row" style="margin-top:15px; margin-left:10px;margin-bottom:15px; ">
        @foreach($projects as $project)
        
        <div class="col-sm-4" >  
            <div class="card" > 
                <div class="card-body">
                    <h5 class="card-title">Style requirements- {{$project->style}} </h5>  
                    <a href = "{{ route('designer.showproject', ['id' => $project->id]) }}"><img src="{{ asset('thumbnails/') }}/{{$project->thumbnail}}" class="img-fluid" width="500" height="500"></a>
                    <div class="card-heading">Location- {{$project->location}} 
                    <br>Budget- RM{{$project->budget}} 
                    <br>Description- {{$project->description}} 
                    <br>Size- {{$project->size}}sq. ft
                    <br><button class="btn btn-primary" button style="width: 100%;" >Bid now</button></div>
              
                </div>
                
            </div>
        </div>
        @endforeach
    </div>
    <div style="margin-bottom:15px;"></div>
</body>
</html>
@endsection