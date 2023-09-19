@extends('layouts.master')
@section('title')
Poetry -
@endsection
@section('content')
<body>
   
<div class="mutura w3-animate-left">
            
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

        <div class="mutura-section w3-margin-top">
               <div class="w3-row-padding w3-margin-bottom">
                   <div class="w3-col l8 m8 s12">
                   <div class="w3-row-padding">
                           <div class="w3-col l4 m6 s12">
                                <div class="artist w3-margin-bottom">
                                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/PQ3l3utdJCA " frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
                           </div>
                           </div>
            
                           <div class="w3-col l4 m6 s12 w3-margin-bottom">
                              <div class="artist">
                                <!-- <iframe width="100%" height="250" src="https://www.youtube.com/embed/BZP1rYjoBgI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    -->
                                </div>
                           </div>
                           <div class="w3-col l4 m6 s12 w3-margin-bottom">
                              <div class="artist">
                                <!-- <iframe width="100%" height="250" src="https://www.youtube.com/embed/BZP1rYjoBgI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>    -->
                                </div>
                        </div>
                       </div>
                   
                   </div>
                   <div class="w3-col l4 m4 s12 w3-right">
                       <!-- <h3 class="w3-text-white w3-xxlarge w3-margin-left  w3-animate-left">about</h3> -->
                       <p class="w3-text-white w3-large w3-panel" style="margin-top: 3em;">
                           Sorry,
                           <br><br>
                            mutura bado haijaiva
                            <br>
                            but you can check out some awesome videos.
                       </p>
                   </div>
               </div>

               <div class="vids-section">
                   <div class="w3-panel">
                       <!-- <div class="w3-row-padding">
                           <div class="w3-col l4 m6 s12">
                                <div class="artist w3-margin-bottom">
                                    <iframe width="100%" height="250" src="https://www.youtube.com/embed/zYposao4Itc" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
                           </div>
                           </div>
            
                           <div class="w3-col l4 m6 s12 w3-margin-bottom">
                              <div class="artist">
                                <iframe width="100%" height="250" src="https://www.youtube.com/embed/BZP1rYjoBgI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
                                </div>
                           </div>
                           <div class="w3-col l4 m6 s12 w3-margin-bottom">
                              <div class="artist">
                                <iframe width="100%" height="250" src="https://www.youtube.com/embed/BZP1rYjoBgI" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>   
                                </div>
                        </div>
                       </div> -->
                       
                   </div>
            
               </div>
       </div>
  
       
    </div>
  </body>
@endsection