
@extends('layouts.master')
@section('title')
Artists
@endsection
@section('content')
<body>

<div class="artists w3-animate-left">
    
   <div class="logo-section">
     <a href="/home"><img src="{{ asset('images/lock-in-logo.png')}}" class="logo"/></a>
   </div>

   <div class="menu-section">
    <div class="w3-bar">
      <a href="/home" class="w3-bar-item">Home</a>
      <a href="/artists" class="w3-bar-item">Performances</a>
      <a href="/movies"  class="w3-bar-item">Film</a>
      <a href="/podcasts" class="w3-bar-item">Podcasts</a>
      <a href="/masterclasses" class="w3-bar-item">Webinars</a>
      <a href="/wellness" class="w3-bar-item">Lifestyle</a>
    </div>
  </div>

  <div class="bar-section">
    <a  onclick="w3_open()" class="w3-text-white"><i class="fa fa-bars"></i></a>
  </div>

    <!--mobile side menu-->
  <div class="w3-sidebar side-menu w3-container w3-bar-block w3-card w3-animate-right" style="width:60%;right:0;display: none;background-color: rgba(0, 0, 0, 0.4);" id="mySidebar">
    <a class="w3-button w3-hide-large w3-text-red w3-right w3-large w3-white w3-margin-top w3-margin-right" onclick="w3_close()">&times;</a>
      <br><br><br><br>
    <a href="/home"  class="w3-bar-item w3-btn">Home</a>
    <a href="/artists"   class="w3-bar-item w3-btn">Performances</a>
    <a href="/movies" class="w3-bar-item w3-btn">  Film</a>
    <a href="/podcasts"  class="w3-bar-item w3-btn">Podcasts</a>
    <a href="/masterclasses"  class="w3-bar-item w3-btn">Webinars</a>
    <a href="/wellness" class="w3-bar-item w3-btn">Lifestyle</a>
  </div>


   <div class="artists-section">
       <div class="w3-panel glider-contain">
           <div class="w3-row-padding glider">
           @foreach($artists as $artist)
               <div class="w3-col l3 m6 s12">
                    <div class="artist w3-hover-shadow  w3-margin-bottom">
                    <a href="{{url('/artist/'.$artist->slug)}}"> <img src="{{ asset('images/artists/'.$artist->image) }}" class="artist-pic"></a>
                        <div class="w3-panel">
                        <h3 class="artist-name">{{$artist->title}}</h3>
                        
                            <p class="artist-synopsis">
                            {{Str::limit($artist->description, $limit = 200, $end = '...')}}  
                            <br>
                              <span class="w3-right w3-margin-right"><u><a href="{{url('/artist/'.$artist->slug)}}">read more</a></u></span>
                            </p>
                          
                            <a href="{{url('/livestream/'.$artist->slug)}}" class="w3-btn w3-margin-top  w3-white w3-text-yellow watch-btn w3-right  w3-margin-right  w3-margin-bottom" style="border-radius: 20px">Watch Performance</a>
                    </div>
               </div>
               </div>
            @endforeach
                
           
           </div>
           <button class="glider-prev">&laquo;</button>
           <button class="glider-next">&raquo;</button>
       </div>

   </div>
 </div>
</body>
@endsection