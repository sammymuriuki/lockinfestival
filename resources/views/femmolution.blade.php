@extends('layouts.master')
@section('title')
Femmolution Boob & Album -
@endsection
@section('content')
<body>
        
        <div class="magazine w3-animate-right">
            <div class="btn-up-section">
                <a href="/" class="pointer"><img src="{{ asset('images/arrow-back.png')}}" class="pointer"/></a>
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
        
        
           <div class="magazine-section">
           
           <iframe allowfullscreen allow="fullscreen" style="border:none;width:100%;height:700px;" src="//e.issuu.com/embed.html?d=magazine_13.03.20_vf5_singlepages&u=creativesgarage1"></iframe>
            <br>
            <iframe width="100%" height="450" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/774987106&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
                <div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/innairobi" title="WWW.iNNAIROBI.COM/TUNEiN" target="_blank" style="color: #cccccc; text-decoration: none;">WWW.iNNAIROBI.COM/TUNEiN</a></div> 
        
        </div>
    
             </div>
              </body>
     @endsection