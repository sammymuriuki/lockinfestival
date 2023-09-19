@extends('layouts.master')
@section('title')
{{ $podcast->title}} -
@endsection
@section('content')
<body>
    
    <div class="podcasts w3-animate-left">
    <div class="logo-section">
     <a href="/home"><img src="{{ asset('images/lock-in-logo.png')}}" class="logo"/></a>
   </div>

   <div class="menu-section">
    <div class="w3-bar">
      <a href="/home" class="w3-bar-item">Home</a>
      <a href="/artists" class="w3-bar-item">Performances</a>
      <a href="/movies"  class="w3-bar-item">Film</a>
      <a href="/podcasts" class="w3-bar-item">Podcasts</a>
      <a href="/masterclass" class="w3-bar-item">Webinars</a>
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
    <a href="/masterclass"  class="w3-bar-item w3-btn">Webinars</a>
    <a href="/wellness" class="w3-bar-item w3-btn">Lifestyle</a>
  </div>

       <div class="artists-section">
           <div class="w3-panel glider-contain">
           <!-- <iframe src="https://castbox.fm/app/castbox/player/id2795530/id254969580?v=8.21.1&autoplay=0" frameborder="0" width="100%" height="500"></iframe> -->
            
            <iframe src="https://castbox.fm/app/castbox/player/id2796095?v=8.21.1&autoplay=0" frameborder="0" width="100%" height="500"></iframe>
           
              @if($podcast->type=='soundcloud')
           <!-- <iframe src="https://castbox.fm/app/castbox/player/id2795530/id254969580?v=8.21.1&autoplay=0" frameborder="0" width="100%" height="500"></iframe>
               <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="{{$podcast->video_link}}"></iframe> -->
            @else
            <h3>Not on soundcloud</h3>
            @endif
           <button class="glider-next">&raquo;</button>
           </div>
          </div>
          <div>
          

          <div class="logo-bottom">
            <a href="/"><img src="{{ asset('/images/lock-in-logo.png')}}" class="logo2"/></a>
          </div>
     </div>
        </body>
@endsection